$(document).ready(function() {

  $('#summernote').summernote({
    placeholder: 'Esta es una descripción genérica, si lo necesita la puede cambiar.',
    tabsize: 2,
    height: 180,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });

/* HABILITAR O DESHABILITAR CLAVE */
// Le doy a la variable el valor del checkbox
var determine = document.getElementById("protege");
// Según el valor del checkbox me va a habilitar o deshabilitar el input para poner la clave
var disableCheckboxConditioned = function () {
  if (determine.checked) {
      document.getElementById("pass").disabled = false;
  } else {
      document.getElementById("pass").disabled = true;
  }
}
// Activar la funcion con un click
determine.onclick = disableCheckboxConditioned;
disableCheckboxConditioned();

 /* VALIDAR CONTRASEÑAS */
$('#pass').keyup(function (e) {
  var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
  var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
  var enoughRegex = new RegExp("(?=.{6,}).*", "g");
  if (false == enoughRegex.test($(this).val())) {
      $('#passstrength').html('Más caracteres.');
  } else if (strongRegex.test($(this).val())) {
      $('#passstrength').className = 'ok';
      $('#passstrength').html('Fuerte!');
  } else if (mediumRegex.test($(this).val())) {
      $('#passstrength').className = 'alert';
      $('#passstrength').html('Media!');
  } else {
      $('#passstrength').className = 'error';
      $('#passstrength').html('Débil!');
  }
  return true;
});
});

/* NOMBRE Y TIPO DE ARCHIVO */
function laFunction() {
  var x = document.getElementById("archive");
  //Colocamos el nombre del archivo
  document.getElementById("name").value = x.files[0].name;

  //Seleccionamos el tipo de archivo
  var nombreArchivo = x.files[0].name;
  //alert(nombreArchivo);
  var extension = getFileExtension(nombreArchivo);
  //alert(extension);
  checkTipoArchivo(extension);
}

/* OBTENEMOS TIPO ARCHIVO */
function getFileExtension(filename) {
  var ext = filename.split('.').pop();
  return ext;
}

/* ACTIVAMOS EL TIPO DE ARCHIVO */
function checkTipoArchivo(extension) {
  if (extension == "jpg" || extension == "png" || extension == "gif" || extension == "tiff" || extension == "jpeg" || extension == "bmp" || extension == "webp") {
      $("#img").prop("checked", true);
      $("#zip").prop("checked", false);
      $("#pdf").prop("checked", false);
      $("#doc").prop("checked", false);
      $("#xls").prop("checked", false);
  } else if (extension == "zip" || extension == "rar" || extension == "bin" || extension == "gz" || extension == "tar") {
      $("#img").prop("checked", false);
      $("#zip").prop("checked", true);
      $("#pdf").prop("checked", false);
      $("#doc").prop("checked", false);
      $("#xls").prop("checked", false);
  } else if (extension == "docx" || extension == "doc" || extension == "odt" || extension == "txt" || extension == "rtf" || extension == "dot" || extension == "dotm") {
      $("#img").prop("checked", false);
      $("#zip").prop("checked", false);
      $("#pdf").prop("checked", false);
      $("#doc").prop("checked", true);
      $("#xls").prop("checked", false);
  } else if (extension == "pdf") {
      $("#img").prop("checked", false);
      $("#zip").prop("checked", false);
      $("#pdf").prop("checked", true);
      $("#doc").prop("checked", false);
      $("#xls").prop("checked", false);
  } else if (extension == "xls" || extension == "xlsx" || extension == "xlsm" || extension == "xltx" || extension == "xlt" || extension == "ods") {
      $("#img").prop("checked", false);
      $("#zip").prop("checked", false);
      $("#pdf").prop("checked", false);
      $("#doc").prop("checked", false);
      $("#xls").prop("checked", true);
  }
}

/* GENERAR HASH */
function generarHash() {
  var nombre = document.getElementById("URL").value;
  var dias = document.getElementById("expiration").value;
  var descargas = document.getElementById("numerito").value;

  if (dias == 0 && descargas == 0) {
      var hash = "9007199254740991"; 
  }else{
      var cadena = "";
      cadena += dias+descargas+nombre;
      var hash = md5(cadena);
  }

  document.getElementById("link").value = hash;
  document.getElementById("link").innerHTML = hash;
}
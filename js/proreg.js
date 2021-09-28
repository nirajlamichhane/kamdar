function myFunction() {
  document.getElementById("myFile").required = true;
  document.getElementById("demo").innerHTML = "The required property was set. A file in the file upload field must now be filled out before submitting the form.";
}
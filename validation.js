  function checkPassword(str)
  {
    var re = /^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    //name
    if(form.name.value == "") {
      alert("Error: Name is required!");
      form.name.focus();
      return false;
    }
    var re = /^([A-Z][A-Za-z ,.'`-]{2,40})$/;
    if(!re.test(form.name.value)) {
      alert("Error: Name must contain ONLY letters and spaces!");
      form.name.focus();
      return false;
    }
    //username
    if(form.username.value == "") {
      alert("Error: Username is required!");
      form.username.focus();
      return false;
    }
    var re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    //password
    if(form.password.value != "" && form.passwordR.value == form.password.value) {
      if(!checkPassword(form.password.value)) {
        alert("The password you have entered is NOT valid!");
        form.password.focus();
        return false;
      }
    }
    else {
      alert("Error: Please check that you've Entered and Confirmed your password!");
      form.password.focus();
      return false;
    }
    //subject name
    if(form.sub_name.value == "") {
      alert("Error: Suject Name is required!");
      form.sub_name.focus();
      return false;
    }
    var re = /^([A-Z][A-Za-z ,.'`-]{1,40})$/;
    if(!re.test(form.sub_name.value)) {
      alert("Error: Subject Name must contain ONLY letters and spaces!");
      form.sub_name.focus();
      return false;
    }
    //fee
    if(form.fee.value == "") {
      alert("Error: Subject Fee is required!");
      form.fee.focus();
      return false;
    }
    re = /^[1-9]\d*$/;
    if(!re.test(form.fee.value)) {
      alert("Error: No decimal. Positive numbers only.");
      form.fee.focus();
      return false;
    }
    return true;
  }

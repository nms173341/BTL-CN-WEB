const validateForm = () => {
  var username = document.getElementById("adminUsername").value;
  let regex = new RegExp("^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$");
	if (!regex.test(username)) {
    alert(
      "Your first name is not valid. Only characters A-Z, a-z and '_' are  accepted."
    );
    document.getElementById("adminUsername").focus();
    return false;
  }
  return true;
};
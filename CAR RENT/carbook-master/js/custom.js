function validate()
{
    // name validation
    var name=document.forms["myform"]["name"].value;
    if(name==""|| name==null)
    {
        document.getElementById('name').ineerHTML="Please fill out the USER NAME ";
        return false;
    }
    else{
        document.getElementById('name').ineerHTML="";
    }

    var alpha=/^[A-Za-z]+$/;

    if(!alpha.test(ufn))
    {
        alert('plaese fill only alpha user first name');
        return false;
    }

    //username validation
    var pass=document.forms["myform"]["name"].value;
    if(pass=="" || pass==null)
    {
        document.getElementById('pass').innerHTML="please fill out the name";
        return false;
    }
    else{
        document.getElementById('pass').innerHTML="";
    }
       //password validation
    if(!(pass.length >=3 && pass.length <=8))
    {
        alert('please ,provide min 3 & max 8 char in pass');
        return false;
    }
       //cpassword validation
    var cpass=document.forms["myforms"]["cpass"].value;
    if(cpass=="" || cpass==null)
    {
        alert('please the fill out the cpass');
        return false;
    }
    // password validation and cpass validation
    if(pass==cpass)
    {

    }
    else
    {
        alert('plaese enter same values');
        return false;
    }
        //email validation
    var email=documnet.forms["myform"]["email"].value;
    if(email=="" || email==null)
    {
        alert('please fill out the email');
        return false;
    }

    var mail=/^[a-zA-Z0-9_]+@[a-za-z]+\.[a-za-Z]{2,4}$/;
    if(!mail.test(email))
    {
        alert('please fill proper email id');
        return false;
    }
    // gen validation

    var gen_arr= document.getElementsByName("gen")
    if(gen_arr[0].checked == true)
    {

    }
    else if (gen_arr[1].checked == true)
    {

    }
    else
    {
        alert('! Please Select Gender');
        return false;
    }

    // lanague validation

    var chk_arr = document.getElementsByName("lag")
      if(chk_arr[0].checked == true)
      {

      }
      else if (chk_arr[1].checked == true)
      {

      }
      else if (chk_arr[2].checked == true)
      {

      }
      else
      {
        alert("! Please the select hobyy");
        return false;
      }
    
}
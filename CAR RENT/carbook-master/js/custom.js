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

    var

    
}
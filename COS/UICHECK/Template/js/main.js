document.getElementById("country").addEventListener("change", myFunction);

function myFunction() {
    var json = country.countries;

    var e = document.getElementById("country");
    var result = e.options[e.selectedIndex].text;
    //    alert(result);
    // console.log(e.selectedIndex);
    var states = json[e.selectedIndex - 1].states;
    var genstate = document.getElementById("state");
    genstate.innerHTML = "";
    for (var i = 0; i < states.length; i++) {
        var option = document.createElement("OPTION");
        option.innerHTML = states[i];
        genstate.options.add(option);
    }



}
window.addEventListener("load", PopulateDropDownList);

function PopulateDropDownList() {

    var json = country.countries;
    var gencountry = document.getElementById("country");
    for (var i = 0; i < json.length; i++) {
        var option = document.createElement("OPTION");
        option.innerHTML = json[i].country;
        gencountry.options.add(option);
    }

}
$(document).click(function () {
    $("#validate").validate({
        rules: {
            firstname: {
                required: true,
                lettersonly: true,
                minlength: 3


            },
            lastname: {
                required: true,
                lettersonly: true,
                minlength: 3


            },
            address: {
                required: true
            },
            town: {
                required: true,
                lettersonly: true,
            },

            postcode: {
                required: true,
                zipcode: true,

            },

            phone: {
                required: true,
                number: true
            },

            //password: {
            //  required: false,
            //minlength: 4,
            //maxlength: 8,
            //pwcheck: true

            // },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            //password: "password should contain  atleast one  uppercase and special character",
            postcode: {
                zipcode: "postcode should be valid"
            },
        }


    });


});

$.validator.addMethod("zipcode", function (value, element) {
    return this.optional(element) || /^\d{6}(?:-\d{4})?$/.test(value);
});



$(document).ready(function () {
    $("#submit").click(function () {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var country = $("#country").val();
        var address = $("#address").val();
        var town = $("#town").val();
        var state = $("#state").val();
        var postcode = $("#postcode").val();
        var phone = $("#phone").val();
        var email = $("#email").val();

        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'firstname=' + firstname + '&lastname=' + lastname + '&country=' + country + '&address=' + address + '&town=' + town + '&state=' + state + '&postcode=' + postcode + '&phone=' + phone + '&email=' + email;


        if (firstname == '' || lastname == '' || country == '' || address == '' || town == '' || state == '' || postcode == '' || phone == '' || email == '') {
            alert("Please Fill All Fields");
        } else {

            $.ajax({
                type: "POST",
                url: "check.php",
                data: dataString,
                cache: false,
                success: function (result) {
                    // alert(result);
                    var go_to_url = "../../stripes/index.php";
                    document.location.href = go_to_url;
                }
            });

            return false;


        }


    });
});

/*if ($.ajax()==true){

$(document).ready(function () {
$("#submit").click(function(){
    
      var go_to_url ="stripes/index.php"
      
      
      document.location.href = go_to_url;
   });
});
}*/






/*$.validator.addMethod("pwcheck", function (value) {
    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) &&
        /[a-z]/.test(value) &&
        /\d/.test(value)
});*/

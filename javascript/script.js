//Contact form submission handling

document.getElementById('contact').addEventListener('submit', sendForm);
const responseMessage = document.getElementById('response-message');




function sendForm(event) {
    
    event.preventDefault();

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var params = "name="+name+"&email="+email+"&phone="+phone+"&subject="+subject+"&message="+message;

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'form-processing.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onprogress = function() {
        responseMessage.innerHTML = "Sending...";
    }

    xhr.onload = function() {
        if(this.status == 200) {
            responseMessage.innerHTML = this.responseText;
            document.getElementById('contact').reset();
        }
        
    }

    xhr.send(params);
    
}

//Hamburger nav handling

const getHamburgerButton = document.getElementById('hamburger').onclick = function() {
    showNav();
};
const getMobileNavBar = document.getElementById('mobile-nav');
const getMobileNavBarLi = document.querySelectorAll('#mobile-nav ul li');
var toggleStatus = false;



function showNav() {
    console.log("hello");
    if(toggleStatus === false) {
        getMobileNavBar.style.width = "230px";
        getMobileNavBar.style.backgroundColor = "#111";
        for(i = 0; i<getMobileNavBarLi.length; i++) {
            getMobileNavBarLi[i].style.visibility = "visible";
        }
        toggleStatus = true;
    } else if(toggleStatus === true) {
        getMobileNavBar.style.width = "20px";
        getMobileNavBar.style.backgroundColor = "transparent";
        for(i = 0; i<getMobileNavBarLi.length; i++) {
            getMobileNavBarLi[i].style.visibility = "hidden";
        }
        toggleStatus = false;
    }
}






$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: false,
        items: 1
    });

    // top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })


    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })


    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

       // click on qty down button
       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });


});

/*Login Register Form*/
//validation
/*function validateForm() {
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const success = document.querySelector("#success");
    const errorNodes = document.querySelectorAll(".error");
  
    let errorFlag = false;
  
    clearMessages();
    if (nameInput.value == "") {
      errorNodes[0].innerText = "Name cannot be blank";
      nameInput.classList.add("error-border");
      errorFlag = true;
    }
  
    if(!emailIsValid(email.value))
    {
      errorNodes[1].innerText = "Invalid email address";
      email.classList.add("error-border");
      errorFlag = true;
    }
  
    if(message.value == "")
    {
      errorNodes[2].innerText = "Please enter a message";
      message.classList.add("error-border");
      errorFlag = true;
    }
  
    if(!errorFlag)
    {
      success.innerText="Success!";
    }
  
  }
  
  function clearMessages(){
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const errorNodes = document.querySelectorAll(".error");
    for(i = 0; i < 3; i++){
      errorNodes[i].innerText = "";   
    }
    password.classList.remove("error-border");
    email.classList.remove("error-border");
   
  }
  
  function emailIsValid(email){
    let pattern= /\S+@\S+\.\S+/;
    return pattern.test(email);
  }*/
  
  //password toggle
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

//sign in sign up buttons 
function changeForm(ind){
    let form = document.querySelector(".loginForm .changes");
    let signIn = document.querySelector(".loginForm .signIn");
    let signUp = document.querySelector(".loginForm .signUp");;
    let submitBtn = document.querySelector(".submitForm")
    
    if(ind == 0){
       
     form.innerHTML = `<input type="text" id="email" placeholder="Email">
     <div class="er">
       <small class="error"></small>
     </div>
     <input type="password" name="password" autocomplete="current-password" id="password" placeholder="Password">
 <i class="far fa-eye" id="togglePassword"></i>
 <div class="er">
   <small class="error"></small>
 </div>`;
        submitBtn.innerHTML = "Sign In";
        signUp.style.backgroundColor = "#e3ebf7";
        signUp.style.color = "#3b71ca";

        signIn.style.backgroundColor = "#007bff";
        signIn.style.color = "#fff";
    }
 else if(ind == 1){
    
    form.innerHTML = `<input type="text" id="email" placeholder="Email">
    <div class="er">
      <small class="error"></small>
    </div>

    <input type="text" id="name" placeholder="Name">
    <div class="er">
      <small class="error"></small>
    </div>
    <input type="text" id="lname" placeholder="Last Name">
    <div class="er">
      <small class="error"></small>
    </div>
    <input type="password" name="password" autocomplete="current-password" id="password" placeholder="Password">
    <i class="far fa-eye" id="togglePassword"></i>
    <div class="er">
        <small class="error"></small>
    </div>
    <input type="password" name="password" autocomplete="current-password"  id="confPassword" placeholder=" Confirm Password">
    <i class="far fa-eye" id="togglePassword"></i>
    <div class="er">
        <small class="error"></small>
    </div>`;
   
    submitBtn.innerHTML= "Sign Up";
    signIn.style.backgroundColor = "#e3ebf7";
    signIn.style.color = "#3b71ca";
       
    signUp.style.backgroundColor = "#007bff";
    signUp.style.color = "#fff";
   
 }

    
}
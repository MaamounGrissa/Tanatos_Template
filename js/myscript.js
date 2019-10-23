$(function () {
/*
    // Trigger Plugin NiceScroll
    $("html").niceScroll({
        cursorcolor: 'gray'
    })
*/
    // Set Height 100% to Header

    $("header").height($(window).height())

    // Set Height 100% to Header on resize

    $(window).resize(function () {

        $("header").height($(window).height())

    })

    // Scroll to Contact section on HireUs Button click

    $("#hireUs").click(function() {
        $("html, body").animate({
            scrollTop: $(".contact").offset().top
        },1500)
    })

    // Scroll to Our Works section on ourWorks Button click

    $("#ourWorks").click(function() {
        $("html, body").animate({
            scrollTop: $(".our-work").offset().top
        },1500)
    })

    // Scroll to first section on arrow click

    $(".arrow i").click(function() {

        $("html, body").animate({
            scrollTop: $(".features").offset().top
        },1000)

    })

    // Subscribe Button

    var email = "",
        subject = "",
        msg = ""


    // Function Send Email via Ajax

    function sendEmail(data, back) {
       
        $.ajax({
            type: "POST",
            url: window.location + "mail.php",
            data: { Data: data},
            dataType: 'json',
            encode: true,
            success: function (data) { 
                back.css("color", "green")                
                back.html('<i class="fas fa-check-circle"></i><span>Email sent successfully</span>')
                back.fadeIn(500)
             },
            error: function (data) { 
                back.css("color", "red")
                back.html('<i class="fas fa-times"></i></i><span>Send error, please try again later</span>')
                back.fadeIn(500)
             }
        })
    }
     

    $("form[name='subscribeForm']").submit(function(e){
        
        e.preventDefault()

       var myInputField = $("form[name='subscribeForm'] input[name='mailSub']"),
           myError = $(".errorMsg")
        // Cheking Errors

        if (myInputField.val() == "" ) {

            myError.html('<i class="fas fa-exclamation-circle"></i><span>Please enter a valid email adress</span>')
            myError.fadeIn(500)
            myInputField.focus()

        } else {

            // Collecting Data in a object

            email = myInputField.val()
            subject = "Email From Subscribe Section"
            msg = "Email from subscribe section : From = " + email

            var myData = {
                "email": email,
                "subject": subject,
                "msg": msg
            }

            // Send Data to php file via AJAX

            sendEmail(myData, $(".sucsessSubscribe"))

        }
    })

    // Clear Errors on Input KeyDown

    $("form[name='subscribeForm'] input[name='mailSub']").on('keydown', function() {
        $(".errorMsg").fadeOut(500)
    })



    // Show Hidden Photos

    $("#showMore").click(function() {

        $(".photos .hidden").fadeIn(1000)
        $(this).prop("disabled", true)

    })

    // Testimonials Silder

    var leftArrow = $(".fa-chevron-left"),
        rightArrow = $(".fa-chevron-right")

        // Function FadeOut Arrows ( Left if first Element || Right if Last Element )

        function checkClients() {

            if ($(".client:first").hasClass('active')) {
                leftArrow.fadeOut()
            } else {
                leftArrow.fadeIn()
            }

            if ($(".client:last").hasClass('active')) {
                rightArrow.fadeOut()
            } else {
                rightArrow.fadeIn()
            }

        }

        checkClients()

        // Browse Element on Arrow click

        $(".testimonials i").click(function() {

            if ($(this).hasClass("fa-chevron-right")) {

                $(".testimonials .active").fadeOut(100, function() {
                    $(this).removeClass('active').next('.client').addClass('active').fadeIn()
                    checkClients()
                })

            } else if ($(this).hasClass("fa-chevron-left")) {

                $(".testimonials .active").fadeOut(100, function() {
                    $(this).removeClass('active').prev('.client').addClass('active').fadeIn()
                    checkClients()
                })

            }

        })

        // 

        $("form[name='contactForm']").submit(function(e){

            e.preventDefault()

           var myInputField = $("form[name='contactForm'] input[name='contactMail']")
            // Cheking Errors
    
            if (myInputField.val() == "" ) {

                $(".contactErrorMsg").fadeIn(500)
                myInputField.focus()
    
            } else {
    
                // Collecting Data in a object
    
                email = myInputField.val()
                subject = $("input[name='subject']").val()
                msg = "Email from Contact section : From = " + email + "<br> Subject = " + subject + "<br> Message = " + $("textarea[name='message']").val()
    
                var myData = {
                    "email": email,
                    "subject": subject,
                    "msg": msg
                }
    
                // Send Data to php file via AJAX
    
                sendEmail(myData, $(".sucsessContact"))
    
            }
        })

        $("form[name='contactForm'] input[name='contactMail']").on("keydown", function() {
            $(".contactErrorMsg").fadeOut(500)
        })
    
})
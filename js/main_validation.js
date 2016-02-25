$(document).ready(
// validate login form
$(function(){
    $('#login_form').validate({
        rules: {
            username_log: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            password_log: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            }
        },//end rules
        messages: {
            username_log: {
                required: "Please enter your name!",
                minlength: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            password_log: {
                required: "Please enter your password!",
                minlegth: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!"
            }
        }//end messages
    });//end validate
}),//end function



//validate register form
$(function(){
    $('#register_form').validate({
        rules:{
            username: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            firstname: {
              required: {
                  depends:function(){
                      $(this).val($.trim($(this).val()));
                      return true;
                    }
                },
              minlength: 3,
              maxlength: 32
            },
            lastname:{
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 3,
                maxlength: 32
            },
            email: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                email: true,
                maxlength: 32
            },
            password: {
                required: {
                    depends:function(){
                      $(this).val($.trim($(this).val()));
                      return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            repassword: {
                required:{
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32,
                equalTo: "#password"
            }
        },//end rules
        messages:{
            username: {
                required: "Please enter your name!",
                minlength: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            firstname: {
                required: "Please enter your first name!",
                minlength: "Please enter at least 3 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            lastname: {
                required: "Please enter your last name!",
                minlength: "Please enter at least 3 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            email: {
                required: "Please enter your email!",
                email: "Please enter valid email!",
                maxlength: "Please enter less than 32 characters!"
            },
            password: {
                required: "Please enter your password!",
                minlength: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            repassword: {
                required: "Please repeat your password!",
                minlength: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!",
                equalTo: "Please enter the same value as field password!"
            }
        }//end messages
    });//end validate
    //check username (free) or (taken)
    $(function(){
        $('#username').on("keyup",function(){
            var username = this.value;
            if(username.length > 4){
                $.ajax({
                    type: 'POST',
                    url: 'http://restaurant.3ds-designstudio.eu/Account/user_check',
                    data: {username: username}
                }).done(function(data){
                    $('#content').html(data);
                }); 
            }
            else{
                $('#content').empty();
            }
        });
    });
       //check email (free) or (taken)
    $(function(){
        $('#email').on("keyup",function(){
            var email = this.value;
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(filter.test(email)){
                $.ajax({
                    type: 'POST',
                    url: 'http://restaurant.3ds-designstudio.eu/Account/email_check',
                    data: {email: email}
                }).done(function(data){
                    $('#content_email').html(data);
                }); 
            }
            else{
                $('#content_email').empty();
            }
        });
    });  
}),//end function



//validate contact form
$(function(){
    $('#main-contact-form').validate({
        rules:{
            name:{
                required:{
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            email:{
                required:{
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                email: true
            },
            subject:{
                required:{
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            message:{
                required: true,
                minlength: 20,
                maxlength: 500
            }
        },
        messages:{
            name:{
                required:"Please enter your name !",  
                minlength:"Please enter at least 5 characters !",
                maxlength:"Please enter less than 32 characters !"
            },
            email:{
                required: "Please enter your email !",
                email: "Please enter valid email !"
            },
            subject:{
                required:"Please enter subject !",
                minlength:"Please enter at least 5 characters !",
                maxlength:"Please enter less than 32 characters !"
            },
            message:{
                required:"Please enter your message !",
                minlength:"Please enter at least 20 characters !",
                maxlength:"Please enter less than 500 characters !"
            }
        }//end messages
    });//end validate
}),//end function


//update form
$(function (){
    $('#update_form').validate({
        rules:{
            username: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 5,
                maxlength: 32
            },
            firstname: {
              required: {
                  depends:function(){
                      $(this).val($.trim($(this).val()));
                      return true;
                    }
                },
              minlength: 3,
              maxlength: 32
            },
            lastname:{
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                minlength: 3,
                maxlength: 32
            },
            email: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                email: true,
                maxlength: 32
            }
        },//end rules
        messages:{
            username: {
                required: "Please enter your name!",
                minlength: "Please enter at least 5 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            firstname: {
                required: "Please enter your first name!",
                minlength: "Please enter at least 3 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            lastname: {
                required: "Please enter your last name!",
                minlength: "Please enter at least 3 characters!",
                maxlength: "Please enter less than 32 characters!"
            },
            email: {
                required: "Please enter your email!",
                email: "Please enter valid email!",
                maxlength: "Please enter less than 32 characters!"
            }
        }//end messages
    });//end validate
    // check username (free) or (taken)
    $(function(){
        $('#username').on("keyup",function(){
            var username = this.value;
            if(username.length > 4){
                $.ajax({
                    type: 'POST',
                    url: 'http://restaurant.3ds-designstudio.eu/Account/change_user',
                    data: {username: username}
                }).done(function(data){
                    $('#content').html(data);
                }); 
            }
            else{
                $('#content').empty();
            }
        });
    });
    //check email (free) or (taken)
    $(function(){
        $('#email').on("keyup",function(){
            var email = this.value;
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(filter.test(email)){
                $.ajax({
                    type: 'POST',
                    url: 'http://restaurant.3ds-designstudio.eu/Account/change_email',
                    data: {email: email}
                }).done(function(data){
                    $('#content_email').html(data);
                    }); 
            }
            else{
                $('#content_email').empty();
            }
        });
    });
}),//end function

//validate change password
    $(function(){
        $('#update_paswword').validate({
            rules:{
                old_password: {
                    required: {
                        depends:function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        }
                    },
                    minlength: 5,
                    maxlength: 32
                },
                newpassword:{
                    required: {
                        depends:function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        }
                    },
                    minlength: 5,
                    maxlength: 32
                },
                renewpassword:{
                    required: {
                        depends:function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        }
                    },
                    minlength: 5,
                    maxlength: 32,
                    equalTo: "#newpassword"
                }
            },//end rules
            messages:{
                old_password: {
                    required: "Please enter your old password!",
                    minlength: "Please enter at least 5 characters!",
                    maxlength: "Please enter less than 32 characters!"
                },
                newpassword: {
                    required: "Please enter your new password!",
                    minlength: "Please enter at least 5 characters!",
                    maxlength: "Please enter less than 32 characters!"
                },
                renewpassword: {
                        required: "Please repeat your new password!",
                        minlength: "Please enter at least 5 characters!",
                        maxlength: "Please enter less than 32 characters!",
                        equalTo: "Please enter the same value as field new password!"
                }
            }//end messages
        }); //end validate   
    }),//end function
       
$(function(){
    $('#reset_pass').validate({
            rules:{
                email_reset: {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                },
                email: true,
                maxlength: 32
                }
            },
            messages:{
                email_reset: {
                required: "Please enter your email!",
                email: "Please enter valid email!",
                maxlength: "Please enter less than 32 characters!"
                }   
            }
        });//end validate
    $(function(){
        $('#email_reset').on("keyup",function(){
            var email = this.value;
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(filter.test(email)){
                $.ajax({
                    type: 'POST',
                    url: 'http://restaurant.3ds-designstudio.eu/Account/find_email',
                    data: {email: email}
                }).done(function(data){
                        $('#content_mail').html(data);
                    }); 
            }
            else{
                $('#content_mail').empty();
            }
        });
    });    
}),//end function
  
$(function(){
    $('#search').validate({
            rules:{
                keyword: {
                    required: {
                        depends:function(){
                            $(this).val($.trim($(this).val()));
                            return true;
                        }
                },
                minlength: 3,
                maxlength: 32
                }
            },
            messages:{
                keyword: {
                required: "Please enter your text!",
                minlength: "Please enter at least 3 characters!",
                maxlength: "Please enter less than 32 characters!"
                }   
            }
    });
})
);//end ready
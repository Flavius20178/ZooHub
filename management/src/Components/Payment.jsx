import React from 'react';

<div>
    <div className="payment">
        <div className="container">
    
        <form id="checkoutForm" onsubmit="return validateForm()">
    
            <div className="row">
    
                <div className="col">
    
                    <h3 className="title">billing address</h3>
    
                    <div className="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="" pattern="[A-Za-z\s]+" title="Please enter a valid name (letters only)"/>
                    </div>
                    <div className="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder=""/>
                    </div>
                    <div className="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder=""/>
                    </div>
                    <div className="inputBox">
                        <span>city :</span>
                        <input type="text" placeholder=""/>
                    </div>
    
                    <div className="flex">
                        <div className="inputBox">
                            <span>country :</span>
                            <input type="text" placeholder=""/>
                        </div>
                        <div className="inputBox">
                            <span>zip code :</span>
                            <input type="text" placeholder="" pattern="\d{6}" title="Please enter a valid 5-digit zip code"/>
                        </div>
                    </div>
    
                </div>
    
                <div className="col">
    
                    <h3 className="title">payment</h3>
    
                    <div className="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/card_img.png" alt=""/>
                    </div>
                    <div className="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="" pattern="[A-Za-z\s]+" title="Please enter a valid name (letters only)"/>
                    </div>
                    <div className="inputBox">
                        <span>credit card number :</span>
                        <input type="text" placeholder="" pattern="\d{16}" title="Please enter a valid 16-digit credit card number"/>
                    </div>
                    <div className="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder=""/>
                    </div>
    
                    <div className="flex">
                        <div className="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="" min="2023"/>
                        </div>
                        <div className="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="" pattern="\d{3}" title="Please enter a valid 3-digit CVV"/>
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="proceed to checkout" className="submit-btn"/>
    
        </form>
    
        </div>    
    </div>    
    {/* <script>
        function validateForm(){
            var formInputs = document.querySelectorAll('#checkForm input');

            for (var i = 0; i < formInputs.length; i++) {
                if (formInputs[i].value == ""){
                    alert("Please fill in all the required fields");
                    return false;
                }
            }

            return true;
        }

    </script> */}
        
</div>
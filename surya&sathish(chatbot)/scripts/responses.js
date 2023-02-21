function getBotResponse(input) {
    
    if (input.length > 2) {
        return "HELLO!" +"<br>" + "please choose any one from <br> below option" + ' <p id="botStarterMessage" class="botText"><span class="design" onclick="coursedetails()" title="click" style="background-color:white;border-style: groove;padding: 7px;";>course</span><span class="design" onclick="schedule()" title="click" style="background-color:white;border-style: groove;margin-left: 21px;padding:7px">schedule</span><br><br><span class="design" onclick="benifits()" title="click" style="background-color:white;border-style: groove;padding:7px">benefits</span><span class="design" onclick="contactus()" title="click" style="background-color:white;border-style: groove;margin-left: 12px;padding:7px">contact us</span></p>';
    }
    else {
        return "please enter your full name"
    }
    
}



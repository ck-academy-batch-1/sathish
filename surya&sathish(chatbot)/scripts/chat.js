// Collapsible
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
     let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();


    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    // // Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getHardResponse();
}


// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});
function coursedetails() {
    buttonSendText(' <p id="botStarterMessage" class="botText"><input type="image" src="robot2.png" width="30" style="margin-bottom: -16px;margin-left: 4px;"></p><p id="botStarterMessage" class="botText"><span class="design" onclick="fun1()" style="background-color:white;border-style: groove; border: 1px solid black">PHP full stack development</span></p>');

    
}
function benifits() {
    buttonSendText("<p>jobrole<p><p id='botStarterMessage' class='botText'><input type='image' src='robot2.png' width='30' style='margin-bottom: -16px;margin-left: 4px;'></p><p id='botStarterMessage' class='botText'><span>become an front-end devloper</span></p><p id='botStarterMessage' class='botText'><span>become an backend developer</span></p><p id='botStarterMessage' class='botText'><span>become an Database-engineer</span></p><p id='botStarterMessage' class='botText'><span onclick = 'iconprocess()' class='design' style='background-color:white;border-style: groove;padding:7px;margin-left: 118px;'>main menu</span></p><hr style='border-top: 1px solid rgb(41 51 44 / 66%);'");


}
function schedule() {
    buttonSendText('<p id="botStarterMessage" class="botText"><input type="image" src="robot2.png" width="30" style="margin-bottom: -16px;margin-left: 4px;"></p><p id="botStarterMessage" class="botText"><span>Duration:3months</span></p><p id="botStarterMessage" class="botText"><span>working days:mon-fri</span></p><p id="botStarterMessage" class="botText"><span>Timing:10am-4.00pm</span></p><p id="botStarterMessage" class="botText"><span>holidays:saturday&sunday</span></p><p id="botStarterMessage" class="botText"><span>Batch strength:20members/Batch</span></p><p id="botStarterMessage" class="botText"><span>Desktop with internet will be provided</span></p><p id="botStarterMessage" class="botText"><span onclick = "iconprocess()" class="design" style="background-color:white;border-style: groove;padding:7px;margin-left: 118px;">main menu</span></p><hr style="border-top: 1px solid rgb(41 51 44 / 66%);"');
    
}
function fun1() { 
    buttonSendText('<p id="botStarterMessage" class="botText"><input type="image" src="robot2.png" width="30" style="margin-bottom: -16px;margin-left: 4px;"></p><p id="botStarterMessage" class="botText"><span class="design"  onclick="fun2()" style="background-color:white;border-style: groove;" title="Click">front-end</span><br><br><span class="design" onclick="fun3()" style="background-color:white;border-style: groove;" title="click">back-end</span><br><br><span class="design"onclick="fun4()" style="background-color:white;border-style: groove;" title="click">Data base</span></p>');
    // buttonSendText('<span class="fa fa-home justify-conent-around" style="font-size: 15px;margin-right: 3px;padding: 4px;" ></span>')
    // buttonSendText("<p id='botStarterMessage' class='botText'><a class='fa fa-chevron-circle-left style='background-color:white;border-style: groove;text-white' id=nothing onclick=''>pre-menu</a>"); buttonSendText("<p id='botStarterMessage' class='botText'><a class='fa fa-chevron-circle-left style='background-color:white;border-style: groove;text-white' id=nothing onclick=''>pre-menu</a>");
    
}
function fun2() {
    // buttonSendText("<p><p>");
    buttonSendText("<p>FRONT-END</p><p id='botStarterMessage' class='botText'><input type='image' src='robot2.png' width='30' style='margin-bottom: -16px;margin-left: 4px;'></p><p id='botStarterMessage' class='botText'><span>HTML</span></p><p id='botStarterMessage' class='botText'><span>css</span></p><p id='botStarterMessage' class='botText'><span>bootstrap</span></p><p id='botStarterMessage' class='botText'><span>jquery</span></p><p id='botStarterMessage' class='botText'><span>javascript</span></p><p id='botStarterMessage' class='botText'><span>json</span><p id='botStarterMessage' class='botText'><span>ajax</span></p><p id='botStarterMessage' class='botText'><span onclick ='fun1()' class='design' style='background-color:white;border-style: groove;padding: 7px;'> prev - menu</span><span onclick = 'iconprocess()' class='design' style='background-color:white;border-style: groove;padding:7px;margin-left: 118px;'>main menu</span></p><hr style='border-top: 1px solid rgb(41 51 44 / 66%);'>");    
    



}
function fun3() {
    buttonSendText("<p>BACK-END<p><p id='botStarterMessage' class='botText'><input type='image' src='robot2.png' width='30' style='margin-bottom: -16px;margin-left: 4px;'></p><p id='botStarterMessage' class='botText'><span>PHP(hypertext preprocessor)</span></p><p id='botStarterMessage' class='botText'><span onclick ='fun1()' class='design' style='background-color:white;border-style: groove;padding: 7px;'> prev - menu</span><span onclick = 'iconprocess()' class='design' style='background-color:white;border-style: groove;padding:7px;margin-left: 118px;'>main menu</span></p><hr style='border-top: 1px solid rgb(41 51 44 / 66%);'>");
    
}
function iconprocess() {
    buttonSendText('<p id="botStarterMessage" class="botText"><input type="image" src="robot2.png" width="30" style="margin-bottom: -16px;margin-left: 4px;"></p><p id="botStarterMessage" class="botText"><span class="design" onclick="coursedetails()" title="click" style="background-color:white;border-style: groove;padding: 7px;";>course</span><span class="design" onclick="schedule()" title="click" style="background-color:white;border-style: groove;margin-left: 21px;padding:7px">schedule</span><br><br><span class="design" onclick="benifits()" title="click" style="background-color:white;border-style: groove;padding:7px">benefits</span><span class="design" onclick="contactus()" title="click" style="background-color:white;border-style: groove;margin-left: 12px;padding:7px">contact us</span></p>');

}
function fun4() {
    buttonSendText("<p id='botStarterMessage' class='botText'><input type='image' src='robot2.png' width='30' style='margin-bottom: -16px;margin-left: 4px;'></p><p>DATABASE<p><p id='botStarterMessage' class='botText'><span>MY sql</span></p><p id='botStarterMessage' class='botText'><span onclick ='fun1()' class='design' style='background-color:white;border-style: groove;padding: 7px;'> prev - menu</span><span onclick = 'iconprocess()' class='design' style='background-color:white;border-style: groove;padding:7px;margin-left: 118px;'>main menu</span></p><hr style='border-top: 1px solid rgb(41 51 44 / 66%);'>");
    
}
function contactus() {
    buttonSendText('<p id="botStarterMessage" class="botText"><input type="image" src="robot2.png" width="30" style="margin-bottom: -16px;margin-left: 4px;"></p><p id="botStarterMessage" class="botText"><span><a href=mailto:Training@ckacademy.com>Training@ckacademy.com</a></span></p><p id="botStarterMessage" class="botText"><span>phone no:6380274408</span></p><p id="botStarterMessage" class="botText"><span onclick = "iconprocess()" class="design" style="background-color:white;border-style: groove;padding:7px;margin-left: 118px;">main menu</span></p><hr style="border-top: 1px solid rgb(41 51 44 / 66%);"')
}



// let chatMessageHuman=document.querySelector(".chat-message-human");
// let chatmessageRobot=document.querySelector(".chat-message-robot");
let chatbox = document.querySelector(".chat-messages");
let submit = document.querySelector("button");
let inputuser = document.querySelector(".inputuser");


submit.addEventListener("click", async () => {

    

    if (inputuser.value != "") {
        let userdiv = document.createElement('div');
        userdiv.classList.add("chat-message-human");
        userdiv.innerHTML = inputuser.value;
        chatbox.appendChild(userdiv);
        chatbox.scrollTop = chatbox.scrollHeight;

        try {

            let response = await fetch("https://api.adviceslip.com/advice");

            let data = await response.json();
            const botMsg = data.slip.advice;
            let aiDiv = document.createElement('div');
            aiDiv.classList.add("chat-message-robot");
            aiDiv.innerHTML = botMsg;
            chatbox.appendChild(aiDiv);
            chatbox.scrollTop = chatbox.scrollHeight;

        }
        catch (err) {
            let errorDiv = document.createElement("div");
            errorDiv.classList.add("chat-message-robot");
            errorDiv.innerHTML = "Something went wrong.";
            chatbox.appendChild(errorDiv);
        }

    }

    inputuser.value = "";
});





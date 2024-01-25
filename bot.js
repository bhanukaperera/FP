$(document).ready(function(){
    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');

        function isvalidhttpurl(string){
            let url;
            try{
                url = new URL(string);
            }catch(_){
                return false;
            }
            return url.protocol === "http:" || url.protocol === "https:";
        }
        
        // start ajax code
        $.ajax({
            url: 'reply.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                if (isvalidhttpurl(result)) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>Please refer to below</p><button class="btn btn-success" onclick=" window.open(\''+result+'\'); return false;" target="_blank" >View PDF</button></div></div>';
                }else{
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                } var $replay;
               
                
                $(".form").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });

        var styleElement = document.createElement('style');
        styleElement.innerHTML = `
            .btn-success {
                margin-top: 10px;
                padding: 10px 20px;
                background-color: #28a745;
                color: #fff; 
                border: none;
                border-radius: 10px;
                cursor: pointer;
            }

            .btn-success:hover {
                background-color: #218838;
            }
        `;
        document.head.appendChild(styleElement);

    });
});

const chatContainer = document.getElementById('chat-container');
const userInput = document.getElementById('user-input');

let bertModel;
(async function loadModel() {
  bertModel = await tf.loadGraphModel('path/to/bert/model.json');
})();

async function sendMessage() {
  const userMessage = userInput.value;
  appendMessage('User', userMessage);

  const embeddings = await getBERTEmbeddings(userMessage);
  
  const botResponse = processEmbeddings(embeddings);

  appendMessage('Bot', botResponse);
  userInput.value = '';
}

/* tokenizing techniques */
async function getBERTEmbeddings(text) {
  const tokens = text.split(' ');
  const indexedTokens = tokens.map((word) => bertTokenizer[word.toLowerCase()] || 0);

  const sequenceLength = 64;
  const paddedTokens = indexedTokens.slice(0, sequenceLength).concat(Array(Math.max(0, sequenceLength - indexedTokens.length)).fill(0));

  const inputTensor = tf.tensor2d([paddedTokens], [1, sequenceLength], 'int32');

  const embeddings = bertModel.execute({ input_word_ids: inputTensor });

  inputTensor.dispose();

  return embeddings;
}

function processEmbeddings(embeddings) {

  return 'Soory i dont understrand';
}

function appendMessage(sender, message) {
  const messageDiv = document.createElement('div');
  messageDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
  chatContainer.appendChild(messageDiv);
  chatContainer.scrollTop = chatContainer.scrollHeight;
}




const  textarea =document.getElementById('userText');
const analyzeButton = document.getElementById('Btn');
const  charDisplay =document.getElementById('charDisplay');
const wordDisplay= document.getElementById('wordDisplay');  
const revrsedTextDisplay = document.getElementById('reversedTextDisplay');

function countWords(text){
    if(text.trim()===""){
        return 0;
    }
    const wordsArray  = text.trim().split(/\s+/);
    const filterdwords  = wordsArray.filter(word => word.length >0);
    return filterdwords.length;
}
function reverseText(text){
    return text.split('').reverse().join('');
}
function  Analyze(){
    let inputText = textarea.value;
     let  charCount= inputText.length;
      let wordCount=countWords(inputText);
       let reversedVersion = reverseText(inputText);

       charDisplay.textContent=charCount;
       wordDisplay.textContent=wordCount;
       if(inputText===""){
 revrsedTextDisplay.innerHTML='<span class="placeholder-text">No Text entered. Write somthing  and click analyze.</span>';

       }else if(reversedVersion===""){ 
        revrsedTextDisplay.innerHTML='<span class="placeholder-text">(Reversed Text is empty)</span>'
     
       }else if(reversedVersion.trim()===""&&inputText.trim()!==""){
        revrsedTextDisplay.innerHTML='<span class="placeholder-text">The text contain only spcaces/tabs/newlines.Reversed version is whitespace.</span>';
       }
       else{
        revrsedTextDisplay.textContent=reversedVersion;
       }}
    
       analyzeButton.addEventListener('click',Analyze);

    
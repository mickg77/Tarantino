console.log("Running");
alert("blah");
function checkCookie(){
    //can do various
    document.getElementById('welcome').innerHTML="Welcome, "+getCookie('name');

    //if goonies pic has been clicked on then write you like the goonies
    if(getCookie('movies')==='goonies'){
        const para =document.createElement('p');
        const node =document.createTextNode('You like the goonies');
        para.appendChild(node);

        const element = document.getElementById('movieDisplay');
        element.appendChild(para);
    }

}
function setCookie(cname, cvalue, exdays){
    let d = new Date();
    d.setTime(d.getTime() +(exdays*24*60*60*1000));
    var expires ="expires="+d.toUTCString();
    //puts a value into a cookie
    document.cookie= cname+"="+cvalue+";"+expires+";";
}

function getCookie(cname){
    //retrieves a value from a cookie
    let name=cname+"="; //sticking on a = sign so that it's easier to read the value
    let cookieArray= document.cookie.split(";"); //splits all cookies into array elements

    for(let i=0;i<cookieArray.length;i++){
        let c=cookieArray[i]; //name=george
        while(c.charAt(0)==' '){
            c=c.substring(1);//cuts out blank space at start
        }
        if(c.indexOf(name)==0){
            return(c.substring(name.length,c.length));
        }
    }
    return(0);//no such cookie has been found

    //cookies have a format like... name=george; band=beatles; decade=60s;
}



        var input=document.getElementById("loginBox");
        var text=document.getElementById("text");

        //addEventListener
        input.addEventListener("keyup", function(event){
            

            if(event.getModifierState("CapsLock")){
                text.style.display="block";
            }
            else {
                text.style.display="none";
            }


        });
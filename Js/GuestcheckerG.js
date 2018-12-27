var bsquares=document.getElementsByClassName("bsquare");
var wpiece=document.getElementsByClassName("wpiece");
var bpiece=document.getElementsByClassName("bpiece");
var temp = document.getElementsByClassName("space");
var clickcounters=new Array(24);
var Xpositions=new Array(24);
var Ypositions=new Array(24);
var curpiece;
var turn=0;
var score1=document.getElementById("score1");
var turnID=document.getElementById("turn");
var player1_Score=0;
var player2_Score=0;
var winner=document.getElementById("winner");

fillArr(Ypositions);
fillArr(Xpositions);
fillArr(clickcounters);
updateBP(Ypositions);

var cubecolumn;
var cuberow;

turnID.innerHTML="player1 turn now";
score1.innerHTML= player1_Score + " : " + player2_Score; 

function func(e){
    var xp = e.clientX;
    var yp = e.clientY;
    cubecolumn =Math.floor(xp/75);
    cuberow =Math.floor(yp/75);
    var coor = "X coords: " + cubecolumn + ", Y coords: " + cuberow;
    //console.log(coor);
    if(xp>600 || yp>600) return;
    if(!checkblack(cubecolumn,cuberow)) return;
    movepiece();
}


document.addEventListener('click',func,true);


function checkWinner(){
    var i;
    var black=0;
    var white=0;
    for(i=0;i<12;i++){//console.log()
        if(bpiece[i].style.visibility!='hidden') black=1;
        if(wpiece[i].style.visibility!='hidden') white=1;
    }
    console.log(black,white);
    if(white==0){
        winner.innerHTML="player 2 is the winner"; frame();
        window.open("/Html/globrec.php");
    }
    if(black==0){
        winner.innerHTML="player 1 is the winner"; frame();
        window.open("/Html/globrec.php");
    }
}
function frame(){
    winner.style.WebkitAnimationName = "blink";
}



function myFunc(id){
    var ids= parseInt(id)-1;
    if(turn==0 && ids>11) return;
    if(turn==1 && ids<12) return;
    clickcounters[ids]++;
    if(clickcounters[ids]>=2) clickcounters[ids]=0;

    //console.log(clickcounters);
    if(checklight(clickcounters,ids)!= -1){
        j=checklight(clickcounters,ids);
        // console.log(j);
        clickcounters[ids]--;
        if(j>=12){
            myFunc(bpiece[j-12].id);
            return;
        }
        else{
            myFunc(wpiece[j].id);
            return;
        }
       
    }
    if(ids>=12){
        ids-=12;
        curpiece=bpiece[ids]; //console.log(curpiece.offsetLeft,curpiece.offsetTop);
        if(clickcounters[ids+12]==0){ 
            curpiece.style.backgroundColor="red";
            cleangreen(ids);
        }
        else{
            curpiece.style.backgroundColor="green";
            if(curpiece.style.borderColor=="rgb(73, 193, 197)") BlightKing();
            Blightcube();
        }
    }
    else{
        curpiece= wpiece[ids];// console.log(curpiece.offsetLeft,curpiece.offsetTop);
        if(clickcounters[ids]==0){
            curpiece.style.backgroundColor="rgb(231, 207, 207)";
            cleangreen(ids);
        }
        else{
            curpiece.style.backgroundColor="green";
            if(curpiece.style.borderColor=="rgb(73, 193, 197)") BlightKing();
            Blightcube();
        }
    }
}

function BlightKing(){

    var ids=parseInt(curpiece.id)-1;
    var curColor;
    var curSq;
    var L=1,T=1;
    if(ids>11) curColor='red';
    else curColor='rgb(231, 207, 207)';

    while(findSq(cubecolumn-L,cuberow-T)!=-1){//light the left upper cubes of the king
        curSq=findSq(cubecolumn-L,cuberow-T);
        if(!pieceExist(bsquares[curSq])){
            bsquares[curSq].style.backgroundColor="green";
            L++;
            T++;
        } 
        else if(pieceExist(bsquares[curSq])){
            if(checkBro(curColor,curSq)) break;
            else{
                curSq=findSq(cubecolumn-L-1,cuberow-T-1);
                if(curSq==-1) break;
                if(pieceExist(bsquares[curSq])) break;
                bsquares[curSq].style.backgroundColor="green";
                break;
            }
        }
    }
    L=1;
    T=1;
    while(findSq(cubecolumn+L,cuberow-T)!=-1){//light the right upper cubes of the king
        curSq=findSq(cubecolumn+L,cuberow-T);
        if(!pieceExist(bsquares[curSq])){
            bsquares[curSq].style.backgroundColor="green";
            L++;
            T++;
        } 
        else if(pieceExist(bsquares[curSq])){
            if(checkBro(curColor,curSq)) break;
            else{
                curSq=findSq(cubecolumn+L+1,cuberow-T-1);
                if(curSq==-1) break;
                if(pieceExist(bsquares[curSq])) break;
                bsquares[curSq].style.backgroundColor="green";
                break;
            }
        }
    }
    L=1;
    T=1;
    while(findSq(cubecolumn-L,cuberow+T)!=-1){//light the left lower cubes of the king
        curSq=findSq(cubecolumn-L,cuberow+T);
        if(!pieceExist(bsquares[curSq])){
            bsquares[curSq].style.backgroundColor="green";
            L++;
            T++;
        } 
        else if(pieceExist(bsquares[curSq])){
            if(checkBro(curColor,curSq)) break;
            else{
                curSq=findSq(cubecolumn-L-1,cuberow+T+1);
                if(curSq==-1) break;
                if(pieceExist(bsquares[curSq])) break;
                bsquares[curSq].style.backgroundColor="green";
                break;
            }
        }
    }
    L=1;
    T=1;
    while(findSq(cubecolumn+L,cuberow+T)!=-1){//light the right lower cubes of the king
        curSq=findSq(cubecolumn+L,cuberow+T);
        if(!pieceExist(bsquares[curSq])){
            bsquares[curSq].style.backgroundColor="green";
            L++;
            T++;
        } 
        else if(pieceExist(bsquares[curSq])){
            if(checkBro(curColor,curSq)) break;
            else{
                curSq=findSq(cubecolumn+L+1,cuberow+T+1);
                if(curSq==-1) break;
                if(pieceExist(bsquares[curSq])) break;
                bsquares[curSq].style.backgroundColor="green";
                break;
            }
        }
    }

}

function Blightcube(){
    var ids=parseInt(curpiece.id)-1;
    if(ids>11){
        var curColor = 'red';
        var leftsqindex=findSq(cubecolumn-1,cuberow-1);
        var rightsqindex=findSq(cubecolumn+1,cuberow-1);
        var leftsqofsq=findSq(cubecolumn-2,cuberow-2);
        var rightsqofsq=findSq(cubecolumn+2,cuberow-2);
    }
    else{
        var curColor = 'rgb(231, 207, 207)';
        var leftsqindex=findSq(cubecolumn-1,cuberow+1);
        var rightsqindex=findSq(cubecolumn+1,cuberow+1);
        var leftsqofsq=findSq(cubecolumn-2,cuberow+2);
        var rightsqofsq=findSq(cubecolumn+2,cuberow+2);
    }
    
    var helper= new Array(4);
    fillArr(helper);
   
    if(leftsqindex!= -1){
        if(!pieceExist(bsquares[leftsqindex])) helper[0]=1;
        else{
            if(leftsqofsq!= -1){
                if(!pieceExist(bsquares[leftsqofsq])) helper[2]=1;
            }
        }
    } 
    if(rightsqindex!= -1){
        if(!pieceExist(bsquares[rightsqindex])) helper[1]=1;
        else{
            if(rightsqofsq!= -1){
                if(!pieceExist(bsquares[rightsqofsq])) helper[3]=1;
            }
        }
    }
    
    if(helper[0]==1 && helper[3]==1 && !checkBro(curColor,rightsqindex)){
        bsquares[rightsqofsq].style.backgroundColor="green";
        return; 
    }
    if(helper[1]==1 && helper[2]==1 && !checkBro(curColor,leftsqindex)){
        bsquares[leftsqofsq].style.backgroundColor="green";
        return; 
    }
    if(helper[2]==1 && helper[1]==0 && helper[3]==0 && !checkBro(curColor,leftsqindex)){ bsquares[leftsqofsq].style.backgroundColor="green"; return; }
    if(helper[3]==1 && helper[0]==0 && helper[2]==0 && !checkBro(curColor,rightsqindex)){bsquares[rightsqofsq].style.backgroundColor="green"; return; }
    if(helper[2]==1 && helper[3]==1){//console.log(checkBro(curColor,leftsqindex));
        if(!checkBro(curColor,leftsqindex)) bsquares[leftsqofsq].style.backgroundColor="green";
        if(!checkBro(curColor,rightsqindex)) bsquares[rightsqofsq].style.backgroundColor="green";        
        return;
    }
    if(helper[0]==1)bsquares[leftsqindex].style.backgroundColor="green";
    if(helper[1]==1)bsquares[rightsqindex].style.backgroundColor="green";    
        
    
}

function checkBro(Color,index){
    var sq=bsquares[index];
    var L=sq.offsetLeft;
    var T=sq.offsetTop;
    var i=0;
    for(i=0;i<12;i++){
        if(wpiece[i].offsetLeft==L && wpiece[i].offsetTop==T) {
            if(Color=='rgb(231, 207, 207)') return true;
            else return false;
        }
    }
    if(Color=='red') return true;
    return false;
}

function cleangreen(ids){
    var i=0;
    if(ids>11) {
        ids-=12;
        if(bpiece[ids].style.backgroundColor=='green'){
             bpiece[ids].style.backgroundColor='red';
              clickcounters[ids+12]=0;
        }
    }
    else{
        if(wpiece[ids].style.backgroundColor=='green'){
             wpiece[ids].style.backgroundColor='rgb(231, 207, 207)';
              clickcounters[ids]=0;
        }
    }
    for(i=0;i<32;i++){
        var curcolor= bsquares[i].style.backgroundColor;
        if(curcolor=="green") bsquares[i].style.backgroundColor="rgb(79, 90, 90)";
    }
}

function fillArr(array){
    var i=0;
    for(i=0;i<array.length;i++){
        array[i]=0;
    }
}

function checklight(arr,index){
    var i=0;
   
    for(i=0;i<arr.length;i++){ 
        if((arr[i]==1)&& (i!=index)) return i;
    }
    return -1;
}

function pieceExist(el){
    var topsq = el.offsetTop;
    var leftsq= el.offsetLeft;
    var l=0;
    for(l=0;l<12;l++){
        
        if(wpiece[l].offsetTop==topsq && wpiece[l].offsetLeft==leftsq) return true;
        if(bpiece[l].offsetTop==topsq && bpiece[l].offsetLeft==leftsq) return true;
        
    } 
    return false;
}

function updateBP(arr){
    var i=12;
    for(i;i<24;i++){
        arr[i]=150;
    }
}

var px,py;
function MoveMe(left,top,ids){
    Xpositions[ids]+=(left*75);
    Ypositions[ids]+=(top*75);
    px=curpiece.offsetLeft;
    py=curpiece.offsetTop;
    curpiece.style.left= Xpositions[ids] + 'px';
    curpiece.style.top= Ypositions[ids] + 'px';
    clickcounters[ids]--;
    if(ids>11) curpiece.style.backgroundColor='red';
    else curpiece.style.backgroundColor='rgb(231, 207, 207)';
    if(left>1 || left<-1 || top>1 || top<-1){
        if(left>1) left-=1;
        if(left<-1) left+=1;
        if(top>1) top-=1;
        if(top<-1) top+=1;
        Eatme(left,top);
    }
   
}

function KingExsample(){
    var i=0;
    for(i=0;i<12;i++){
        if(i==2 || i==6 || i==8) continue;
        wpiece[i].style.visibility="hidden";
        wpiece[i].style.left= 600+'px';
        wpiece[i].style.top=0+'px';

        bpiece[i].style.visibility="hidden";
        bpiece[i].style.left= 600+'px';
        bpiece[i].style.top=0+'px';

    }
    bpiece[2].style.top= -225+'px';
    bpiece[2].style.left= (-75*3)+'px';
    Xpositions[14]=(-75*3);
    Ypositions[14]=-225;
    makeMeK(14);
}

function makeMeK(ids){
    if(ids>11){
        if(bpiece[ids-12].style.borderColor=="rgb(73, 193, 197)") return;
        bpiece[ids-12].style.width=bpiece[ids-12].offsetWidth-10+'px';
        bpiece[ids-12].style.height=bpiece[ids-12].offsetHeight -10+'px';
        bpiece[ids-12].style.border='thick solid rgb(73, 193, 197)';
        bpiece[ids-12].style.borderWidth = "5px 5px 5px 5px";
    }
    else{
        if(wpiece[ids].style.borderColor=="rgb(73, 193, 197)") return;
        wpiece[ids].style.width= wpiece[ids].offsetWidth -10+'px';
        wpiece[ids].style.height= wpiece[ids].offsetHeight -10+'px'; 
        wpiece[ids].style.border='thick solid rgb(73, 193, 197)';
        wpiece[ids].style.borderWidth = "5px 5px 5px 5px";
    }
}

function Eatme(left,top){ 
    var leftF= px +(left*75);
    var topF= py + (top*75);
    var i=0;
    if(!pieceExist(bsquares[findSq(leftF/75,topF/75)])) return;
    if(turn==0) player1_Score++;
    else player2_Score++;
    
    for(i;i<12;i++){
       if(wpiece[i].offsetLeft==leftF && wpiece[i].offsetTop==topF){ 
            wpiece[i].style.visibility="hidden";
            wpiece[i].style.left= 600+'px';
            wpiece[i].style.top=0+'px';
       }
       if(bpiece[i].offsetLeft==leftF && (bpiece[i].offsetTop)==topF) {
           bpiece[i].style.visibility="hidden";
           bpiece[i].style.left= 600+'px';
           bpiece[i].style.top=0+'px';
       }
    }
    checkWinner();
    score1.innerHTML= player1_Score + " : " + player2_Score;

}

function movepiece(){ 
    var curCube =bsquares[findSq(cubecolumn,cuberow)];
    var leftpos= curpiece.offsetLeft/75;
    var toppos = curpiece.offsetTop/75;
    var ids=parseInt(curpiece.id)-1;
   
    if(curCube.style.backgroundColor=='green'){ //console.log(ids);
        turn=(turn+1)%2;
        
        if(turn==1){ turnID.innerHTML="player2 turn now"; turnID.style.color="red";}     //change to username later
        else {turnID.innerHTML="player1 turn now"; turnID.style.color="white";}
        
        var leftSteps=cubecolumn-leftpos;
        var topSteps=cuberow-toppos;
        MoveMe(leftSteps,topSteps,ids);
       // console.log(curpiece.offsetTop);
        if(curpiece.offsetTop==525 || curpiece.offsetTop== 0) makeMeK(ids);
    }
    else if(curCube.style.backgroundColor=='rgb(90, 79, 79)'){
        if(checklight(clickcounters,ids)== -1){
            j=checklight(clickcounters,ids);
            if(clickcounters[ids]!=0) clickcounters[ids]--;  
        }
    }
    cleangreen(ids);
        
}


function checkblack(column,row){
    if(row%2==0){
        if(column%2!=0) return true;
        return false;
    }
    else{
        if(column%2==0) return true;
        return false;
    }
}

function findSq(xpos,ypos){
    var i=0;
    var cursq;
  
    if(xpos<0||ypos<0||xpos>7||ypos>7) return -1;
    for(i=0;i<32;i++){
        cursq=bsquares[i];
        if(cursq.offsetLeft==xpos*75 && cursq.offsetTop==ypos*75) return i;
    }
    
    return -1;
}



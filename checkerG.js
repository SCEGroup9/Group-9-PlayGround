var bsquares=document.getElementsByClassName("bsquare");
var wpiece=document.getElementsByClassName("wpiece");
var bpiece=document.getElementsByClassName("bpiece");
var clickcounters=new Array(24);
var Xpositions=new Array(24);
var Ypositions=new Array(24);
var curpiece;

fillArr(Ypositions);
fillArr(Xpositions);
fillArr(clickcounters);
updateBP(Ypositions);

var cubecolumn;
var cuberow;

function func(e){console.log(e);
    var xp = e.clientX;
    var yp = e.clientY;
    cubecolumn =Math.floor(xp/75);
    cuberow =Math.floor(yp/75);
    var coor = "X coords: " + cubecolumn + ", Y coords: " + cuberow;
    // console.log(coor);
    if(xp>600 || yp>600) return;
    if(!checkblack(cubecolumn,cuberow)) return;
    movepiece();
}


document.addEventListener('click',func,true);



function myFunc(id){
    var ids= parseInt(id);
    ids--;
    clickcounters[ids]++;
    if(clickcounters[ids]>=2) clickcounters[ids]=0;

    console.log(clickcounters);
    if(checklight(clickcounters,ids)!= -1){
        j=checklight(clickcounters,ids);
        // console.log(j);
        clickcounters[ids]--;
        // console.log(bpiece[j-12].id);
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
        curpiece=bpiece[ids];
        if(clickcounters[ids+12]==0){ 
            curpiece.style.backgroundColor="red";
            cleangreen();
        }
        else{
            curpiece.style.backgroundColor="green";
            Blightcube();
        }
    }
    else{
        curpiece= wpiece[ids];
        if(clickcounters[ids]==0){
            curpiece.style.backgroundColor="rgb(231, 207, 207)";
            cleangreen();
        }
        else{
            curpiece.style.backgroundColor="green";
            Wlightcube();
        }
    }
}


function Blightcube(){
    var leftsqindex=findSq(cubecolumn-1,cuberow-1);
    var rightsqindex=findSq(cubecolumn+1,cuberow-1);
    console.log("here");
    if(leftsqindex== -1 && rightsqindex== -1) return;
    console.log(leftsqindex,rightsqindex);
    if(leftsqindex!= -1){
        if(!pieceExist(bsquares[leftsqindex]))bsquares[leftsqindex].style.backgroundColor="green";
    
    } 
    if(rightsqindex!= -1){
        if(!pieceExist(bsquares[rightsqindex])) bsquares[rightsqindex].style.backgroundColor="green";
    }
       
}

function Wlightcube(){
    var leftsqindex=findSq(cubecolumn-1,cuberow+1);
    var rightsqindex=findSq(cubecolumn+1,cuberow+1);
    if(leftsqindex== -1 && rightsqindex== -1) return;
    console.log(leftsqindex,rightsqindex);
    if(leftsqindex!= -1){
        if(!pieceExist(bsquares[leftsqindex]))bsquares[leftsqindex].style.backgroundColor="green";
    
    } 
    if(rightsqindex!= -1){
        if(!pieceExist(bsquares[rightsqindex])) bsquares[rightsqindex].style.backgroundColor="green";
    }
       
}

function cleangreen(){
    var i=0;
    for(i=0;i<32;i++){
        var curcolor= bsquares[i].style.backgroundColor;
        if(curcolor=="green") bsquares[i].style.backgroundColor="rgb(90, 79, 79)";
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
    var l=0;
    for(l=0;l<12;l++){
        
        if(wpiece[l].offsetTop==topsq && wpiece[l].offsetLeft==el.offsetLeft) return true;
        if(bpiece[l].offsetTop==topsq && bpiece[l].offsetLeft==el.offsetLeft) return true;
        
    } 
    return false;
}

function updateBP(arr){
    var i=12;
    for(i;i<24;i++){
        arr[i]=150;
    }
}


function movepiece(){ 
    var curCube =bsquares[findSq(cubecolumn,cuberow)];
    var leftpos= curpiece.offsetLeft/75;
    var toppos = curpiece.offsetTop/75;
    var ids=parseInt(curpiece.id)-1;
    // if(ids>11) moveblack(ids,curCube);
    if(curCube.style.backgroundColor=='green'){
        if(leftpos+1==cubecolumn && toppos-1==cuberow){
            Xpositions[ids]+=75;
            Ypositions[ids]-=75;
            console.log(Ypositions[ids]);
            curpiece.style.left= Xpositions[ids] + 'px';
            curpiece.style.top= Ypositions[ids] + 'px';
            curpiece.style.backgroundColor='red';
            clickcounters[ids]--;
        }
        else if(leftpos-1==cubecolumn && toppos-1==cuberow){
            Xpositions[ids]-=75;
            Ypositions[ids]-=75;
            console.log(Xpositions[ids],Ypositions[ids]);
            curpiece.style.left= Xpositions[ids] + 'px';
            curpiece.style.top= Ypositions[ids] + 'px';
            curpiece.style.backgroundColor='red';
            clickcounters[ids]--;
        }
        else if(leftpos+1==cubecolumn && toppos+1==cuberow){
            Xpositions[ids]+=75;
            Ypositions[ids]+=75;
            curpiece.style.left= Xpositions[ids] + 'px';
            curpiece.style.top= Ypositions[ids] + 'px';
            curpiece.style.backgroundColor='rgb(231, 207, 207)';
            clickcounters[ids]--;
        }
        else if(leftpos-1==cubecolumn && toppos+1==cuberow){
            Xpositions[ids]-=75;
            Ypositions[ids]+=75;
            curpiece.style.left= Xpositions[ids] + 'px';
            curpiece.style.top= Ypositions[ids] + 'px';
            curpiece.style.backgroundColor='rgb(231, 207, 207)';
            clickcounters[ids]--;
        }
    }
    cleangreen();
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
    var index=0;
    var cursq;
  
    if(xpos<0||ypos<0||xpos>7||ypos>7) return -1;
    for(index=0;index<32;index++){
        cursq=bsquares[index];
        if(cursq.offsetLeft==xpos*75 && cursq.offsetTop==ypos*75) return index;
    }
    
    return -1;
}



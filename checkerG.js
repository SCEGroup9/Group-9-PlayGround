var bsquares=document.getElementsByClassName("bsquare");
var wpiece=document.getElementsByClassName("wpiece");
var bpiece=document.getElementsByClassName("bpiece");
var clickcounters=new Array(24);
var curpiece;


fillcount(clickcounters);




function myFunc(id){
    var ids= parseInt(id);
    ids--;
    clickcounters[ids]++;
    if(clickcounters[ids]>=2) clickcounters[ids]=0;

    // console.log(clickcounters);
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
        curpiece=x=bpiece[ids];
       
        if(clickcounters[ids+12]==0){ 
            x.style.backgroundColor="red";
            if(ids>3&&ids<8){
                if(!pieceExist(bsquares[ids+16])&& x.offsetLeft!=0 && x.offsetTop!=0)bsquares[ids+16].style.backgroundColor="rgb(90, 79, 79)";
                if(!pieceExist(bsquares[ids+17])&& x.offsetLeft!=525 && x.offsetTop!=0) bsquares[ids+17].style.backgroundColor="rgb(90, 79, 79)";
            }
            else{
                if(!pieceExist(bsquares[ids+15])&& x.offsetLeft!=0 && x.offsetTop!=0)bsquares[ids+15].style.backgroundColor="rgb(90, 79, 79)";
                if(!pieceExist(bsquares[ids+16])&& x.offsetLeft!=525 && x.offsetTop!=0) bsquares[ids+16].style.backgroundColor="rgb(90, 79, 79)";        
            }
        }
        else{
            x.style.backgroundColor="green";
            if(ids>3&&ids<8){
                if(!pieceExist(bsquares[ids+16])&& x.offsetLeft!=0 && x.offsetTop!=0)bsquares[ids+15].style.backgroundColor="green";
                if(!pieceExist(bsquares[ids+17])&& x.offsetLeft!=525 && x.offsetTop!=0)bsquares[ids+16].style.backgroundColor="green";
        
            }
            else{
                if(!pieceExist(bsquares[ids+15])&& x.offsetLeft!=0 && x.offsetTop!=0)bsquares[ids+15].style.backgroundColor="green";
                if(!pieceExist(bsquares[ids+16])&& x.offsetLeft!=525 && x.offsetTop!=0)bsquares[ids+16].style.backgroundColor="green";
            } 
        }
    }
    else{
        curpiece=x=wpiece[ids];
        if(clickcounters[ids]==0){
            x.style.backgroundColor="rgb(231, 207, 207)";
            if(ids>3&&ids<8){
                if(!pieceExist(bsquares[ids+3]) && x.offsetLeft!=0 && x.offsetTop!=525) bsquares[ids+3].style.backgroundColor="rgb(90, 79, 79)";
                if(!pieceExist(bsquares[ids+4])&& x.offsetLeft!=525 && x.offsetTop!=525) bsquares[ids+4].style.backgroundColor="rgb(90, 79, 79)";
        
            }
            else{
                if(!pieceExist(bsquares[ids+4]) && x.offsetLeft!=0 && x.offsetTop!=525) bsquares[ids+4].style.backgroundColor="rgb(90, 79, 79)";
                if(!pieceExist(bsquares[ids+5])&& x.offsetLeft!=525 && x.offsetTop!=525) bsquares[ids+5].style.backgroundColor="rgb(90, 79, 79)";

            }
        }
        else{
            x.style.backgroundColor="green";
            if(ids>3&&ids<8){
                if(!pieceExist(bsquares[ids+3])&& x.offsetLeft!=0 && x.offsetTop!=525) bsquares[ids+3].style.backgroundColor="green";
                if(!pieceExist(bsquares[ids+4])&& x.offsetLeft!=525 && x.offsetTop!=525) bsquares[ids+4].style.backgroundColor="green";
            }
            else{
                if(!pieceExist(bsquares[ids+4])&& x.offsetLeft!=0 && x.offsetTop!=525) bsquares[ids+4].style.backgroundColor="green";
                if(!pieceExist(bsquares[ids+5])&& x.offsetLeft!=525 && x.offsetTop!=525) bsquares[ids+5].style.backgroundColor="green";
            }
        }
    }
}

function fillcount(array){
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

function movepiece(id){ 
    var ids=parseInt(id);
    console.log(ids);

}

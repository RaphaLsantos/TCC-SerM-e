/*window scrol*/
window.addEventListener('scroll',()=>{
    document.querySelector('.profile-popup').style.display='none'
    document.querySelector('.add-post-popup').style.display='none'
    document.querySelector('.notification-box').style.display='none'
})


/*inicio aside*/
let menuItem = document.querySelectorAll('.menu-item');

menuItem.forEach(item=>{
    item.addEventListener('click',()=>{
        removeActive();
        item.classList.add('active');
        document.querySelector('.notification-box').style.display='none'
    })
})

const removeActive = ()=>{
    menuItem.forEach(item=>{
        item.classList.remove('active')
    })
} 

//Mensagem//
document.querySelector('#messageMenu').addEventListener('click',()=>{
    document.querySelector('#notfyCounter2').style.display='none'    
})


/*inicio perfil popUp*/
document.querySelectorAll('#my-profile-picture').forEach(AllProfile => {
    AllProfile.addEventListener('click', ()=>{
        document.querySelector('.profile-popup').style.display='flex'
    })
});

document.querySelectorAll('.close').forEach(AllCloser=>{
    AllCloser.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='none'
        document.querySelector('.add-post-popup').style.display='none'
    })
})

document.querySelector('#profile-upload').addEventListener('change',()=>{
    document.querySelectorAll('#my-profile-picture img').forEach(AllMyProfileImg=>{
        AllMyProfileImg.src = URL.createObjectURL(document.querySelector('#profile-upload').files[0])
    })
})
/*Final perfil popUp*/


/*inicio adicionar post*/
document.querySelector('#crate-lg').addEventListener('click',()=>{
    document.querySelector('.add-post-popup').style.display='flex'
})

document.querySelector('#feed-pic-upload').addEventListener('change',()=>{
    document.querySelector('#postIMg').src = URL.createObjectURL(document.querySelector('#feed-pic-upload').
    files[0]);
})
/*final adicionar post*/


/*inicio adicionar story*/
document.querySelector('#add-story').addEventListener('change',()=>{
    document.querySelector('.story img').src = URL.createObjectURL(document.querySelector('#add-story').
    files[0]);
    document.querySelector('.add-story').style.display='none'
});
/*final adicionar story*/


/*liked botão*/
document.querySelectorAll('.action-button span:first-child i').forEach(liked=>{
    liked.addEventListener('click',()=>{
       liked.classList.toggle('liked');
    })
})
/*liked botão*/  


/*mini button input*/
document.querySelector('.mini-button').addEventListener('click',()=>{
    document.querySelector('.input-post').classList.add('boxshadow1')
    setTimeout(() =>{
        document.querySelector('.input-post').classList.toggle('boxshadow1');
    }, 3000);
});
document.querySelector('.mini-button').addEventListener('dblclick',()=>{
    document.querySelector('.add-post-popup').style.display='flex'
});



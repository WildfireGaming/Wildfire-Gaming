function changeImage1(id,src1,src2){
 var img=document.getElementById(id);
 if (img){
  var src=img.src,p=src.slice(0,src.lastIndexOf('/'))+'/';
  if (src==p+src1){
   img.src=p+src2;
  }
  else {
   img.src=p+src1;
  }
 }
}
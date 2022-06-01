    const validar=()=>{
       const usu_nombre=document.querySelector("#usu_nombre");
       const usu_apellido=document.querySelector("#usu_apellido");
       const usu_cedula=document.querySelector("#usu_cedula");
       const usu_direccion=document.querySelector("#usu_direccion");
       const email=document.querySelector("#email");


       if(usu_nombre.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo nombre es obligatorio',
          });
         return false;
       }

         if(usu_apellido.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo apellido es obligatorio',
          });
         return false;
       }

         if(usu_cedula.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo cedula es obligatorio',
          });
         return false;
       }
         if(usu_direccion.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo es obligatorio',
          });
         return false;
       }
         if(email.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El correo es obligatorio',
          });
         return false;
       }


        
}

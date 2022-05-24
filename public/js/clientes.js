    const validar=()=>{
       const cli_nombre=document.querySelector("#cli_nombre");
       const cli_apellido=document.querySelector("#cli_apellido");
       const cli_cedula=document.querySelector("#cli_cedula");
       const cli_telefono=document.querySelector("#cli_telefono");
       const cli_direccion=document.querySelector("#cli_direccion");
       const email=document.querySelector("#email");

       if(cli_nombre.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo nombre es obligatorio',
          });
         return false;
       }

         if(cli_apellido.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo apellido es obligatorio',
          });
         return false;
       }

         if(cli_cedula.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo cedula es obligatorio',
          });
         return false;
       }
         if(cli_telefono.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo telefono es obligatorio',
          });
         return false;
       }

         if(cli_direccion.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo direccion  es obligatorio',
          });
         return false;
       }

         if(email.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo email es obligatorio',
          });
         return false;
       }
       
    }


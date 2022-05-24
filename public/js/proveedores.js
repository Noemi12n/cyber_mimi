const validar=()=>{
       const prov_nombre=document.querySelector("#prov_nombre");
       const prov_direccion=document.querySelector("#prov_direccion");
       const prov_telefono=document.querySelector("#prov_telefono");
       const prov_correo=document.querySelector("#prov_correo");


       if(prov_nombre.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo nombre es obligatorio',
          });
         return false;
       }

         if(prov_direccion.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo direccion es obligatorio',
          });
         return false;
       }

         if(prov_telefono.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo telefono es obligatorio',
          });
         return false;
       }
         if(prov_correo.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo correo es obligatorio',
          });
         return false;
       }

         
    }


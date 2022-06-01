  const validar=()=>{
       const cli_id=document.querySelector("#cli_id");
       const fac_no=document.querySelector("#fac_no");
       const fac_fecha=document.querySelector("#fac_fecha");
       const fac_tipo_pago=document.querySelector("#fac_tipo_pago");
       const fac_descuento=document.querySelector("#fac_descuento");
       const fac_observaciones=document.querySelector("#fac_observaciones");



       if(cli_id.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo cliente es obligatorio',
          });
         return false;
       }

         if(fac_no.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo número es obligatorio',
          });
         return false;
       }

         if(fac_fecha.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo fecha es obligatorio',
          });
         return false;
       }
         if(fac_tipo_pago.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'Este campo es obligatorio',
          });
         return false;
       }
         if(fac_descuento.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo descuento es obligatorio',
          });
         return false;
       }
      if(fac_observaciones.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo observacion es obligatorio',
          });
         return false;
       }


        
}
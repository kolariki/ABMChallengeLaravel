<div>
<div class="row">    
  <div class="col-md-8">        
    <div class="mt-2 table-responsive-md">            
      <table class="table table-striped">                
        <thead>                  
          <tr>                                     
            <th scope="col">Titulo</th>                    
            <th scope="col">Descripción</th>                    
            <th scope="col">Created</th>                                       
            <th scope="col">Acción</th>                    
            <th scope="col"></th>                  
            </tr>                
        </thead>                
        <tbody>                    
          @foreach ($products as $product)                        
            <tr>                                                      
              <td>{{ $product->titulo }}</td>                            
              <td>{{ $product->description }}</td>                            
              <td>{{ $product->created_at }}</td>                                                      
              <td>                                
              <button type="button" class="btn btn-success" wire:click='edit({{ $product->id }})'>Editar</button>                  
              </td>                            
              <td>                                
              <button type="button" class="btn btn-danger" wire:click='destroy({{ $product->id }})'>Borrar</button>              
              </td>                        
            </tr>                    
          @endforeach                
        </tbody>            
       </table>             
       {{ $products->links('pagination::Bootstrap-4') }}        
     </div>    
   </div>    
   <div class="col-md-4">    
   <div class="container">    
  @include("livewire.$view"); 
</div>
   </div> 
</div>
</div>

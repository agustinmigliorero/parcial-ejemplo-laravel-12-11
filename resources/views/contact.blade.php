<x-layout>

<div class="container mt-5">
    <h2 class="mb-4">Contacto sobre la propiedad</h2>

    <form action="/contacto" method="POST" class="p-4 border rounded bg-light">
        @csrf
        <input type="hidden" name="property_id" value="{{$property_id}}"> 
        <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="255">
        </div>
         <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="255">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
  
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
    </form>
</div>
</x-layout>


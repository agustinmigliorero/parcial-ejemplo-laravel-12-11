<tr>
          <td>{{$propiedad->property_id}}</td>
          <td>{{$propiedad->title}}</td>
          <td>{{$propiedad->description}}</td>
          <td>{{$propiedad->price}}</td>
          <td>{{$propiedad->address}}</td>
          <td>{{$propiedad->property_type}}</td>
          <td>{{$propiedad->bedrooms}}</td>
          <td>{{$propiedad->bathrooms}}</td>
          <td>{{$propiedad->area}}</td>
          <td>
            <x-boton color="info" texto="Ver Imágenes" ruta="/imagenes/{{$propiedad->property_id}}"></x-boton>
            <x-boton color="danger" texto="Realizar Consulta" ruta="/contacto/{{$propiedad->property_id}}"></x-boton>
          </td>
</tr>
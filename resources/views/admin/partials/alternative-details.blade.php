<div class="d-flex justify-content-center">
   <img class="img-fluid" src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}">
</div>
<table class="table table-bordered table-border-purple">
   <tbody class="th-text-nowrap tr-align-middle">
      <tr>
         <th>Name</th>
         <td>{{ $alternative->name }}</td>
      </tr>
      <tr>
         <th>Brand</th>
         <td>{{ $alternative->brand }}</td>
      </tr>
      <tr>
         <th>Price</th>
         <td>Rp. {{formatPrice($alternative->price) }}</td>
      </tr>
      <tr>
         <th>Processor</th>
         <td>{{ $alternative->processor }}</td>
      </tr>
      <tr>
         <th>GPU</th>
         <td>{{ $alternative->gpu }}</td>
      </tr>
      <tr>
         <th>Memory (RAM)</th>
         <td>{{ $alternative->ram }}</td>
      </tr>
      <tr>
         <th>Storage</th>
         <td>{{ $alternative->storage }}</td>
      </tr>
      <tr>
         <th>Display</th>
         <td>{{ $alternative->display }}</td>
      </tr>
      <tr>
         <th>Unit Weight</th>
         <td>{{ $alternative->unit_weight }}</td>
      </tr>
      <tr>
         <th>Connectivity</th>
         <td>{{ $alternative->connectivity }}</td>
      </tr>
      <tr>
         <th>Ports</th>
         <td>{{ $alternative->ports }}</td>
      </tr>
      <tr>
         <th>Features</th>
         <td>{{ $alternative->features }}</td>
      </tr>
      <tr>
         <th>Official Website</th>
         <td class="align-middle">
            <a href="{{ $alternative->link }}" target="_blank" class="btn btn-sm btn-block btn-success"><i class="fas fa-external-link-alt mr-2"></i>Link</a></a>
         </td>
      </tr>
   </tbody>
</table>
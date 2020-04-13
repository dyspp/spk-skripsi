@foreach($alternativeRanks as $alternativeRank)
<tr>
   <td class="text-center">{{ $number++ }}</td>
   <td>{{ $alternativeRank->alternative_name }}</td>
   <td class="text-center w-5p">
      <a class="btn btn-sm btn-catalog" href="{{ route('public.catalog.item', $alternativeRank->alternative_slug) }}" target="_blank" rel="noopener noreferrer">Details</a>
   </td>
   <td>{{ $alternativeRank->final_score }}</td>
</tr>
@endforeach
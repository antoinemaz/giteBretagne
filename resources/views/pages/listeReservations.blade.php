<table id="candidatures" class="table table-condensed" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Date de début</th>
      <th>Date de fin</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($res as $r)
        <tr>
          <td>{{ $r->nom }}</td>
          <td>{{ $r->getDateDebutFormatee() }}</td>
          <td>{{ $r->getDateFinFormatee() }}</td>
        </tr>
      @endforeach
  </tbody>
</table>
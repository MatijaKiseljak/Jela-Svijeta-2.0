<form method="GET" action="{{ url('/jela') }}">
    <label for="per_page">Broj rezultata po stranici:</label>
    <select id="per_page" name="per_page" onchange="this.form.submit()">
        <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
        <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
        <option value="15" {{ $perPage == 15 ? 'selected' : '' }}>15</option>
        <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
    </select>
</form>

<label for="language-select">Odaberi jezik:</label>
<select id="language-select" onchange="updateLanguage()">
  <option value="hr">Hrvatski</option>
  <option value="en">English</option>
</select>

<script>
function updateLanguage() {
  var langSelect = document.getElementById("language-select");
  var selectedLang = langSelect.options[langSelect.selectedIndex].value;
  window.history.pushState("", "", "?lang=" + selectedLang);
}
</script>


@foreach ($meals as $meal)
    <div>{{ $meal->name }}</div>
@endforeach

{{ $meals->appends(['per_page' => $perPage])->links() }}

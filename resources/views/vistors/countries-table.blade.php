<div class="table-responsive">
    <table class="table" id="links-table">
        <thead>
        <tr>
            <th>Country</th>
            <th>Total</th>
         </tr>
        </thead>
        <tbody>
        @foreach($countries as $vistor)
            <tr>
                <td>{!! $vistor->country !!}</td>
                <td>{!! $vistor->num !!}</td>
               
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

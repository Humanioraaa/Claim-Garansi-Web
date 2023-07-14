<div class="table-responsive browser_users">
    <table class="table mb-0">
        <thead class="thead-light">
            <tr>
                <th class="border-top-0">Nama Staff</th>
                <th class="border-top-0">Total Komplain Diterima</th>
                <th class="border-top-0">Komplain Di Selesaikan</th>
                <th class="border-top-0">Rerata</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($komplain as $show)
            <tr>
                <td>
                    {{$show->User->name}}
                </td>
                <td>
                    {{$show->User->name}}
                </td>
                <td>
                </td>
                <td>
                    52.80%
                    <i class="fas fa-caret-up text-success font-16"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

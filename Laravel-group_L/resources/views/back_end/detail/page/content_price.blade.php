<div class="admin-content">
    <div class="main">
    <h3> Detail Page - Price </h3>
        <table>
            <tr>
                <label> FEATURE: </label>
                <a href="{{ URL::route('addPrice') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Add</a>
                <a href="{{ URL::route('exportPrice') }}" 
                    class="btn btn-info pull left" style="margin-right:3px;">Export to Excel</a>
            </tr>
            <tr>
                <form method="GET" action="{{ URL::route('adminDetail') }}">
                    <span>SORT: </span>
                    <select name="sort">
                        <option value="id">ID</option>
                        <option value="title">Title</option>
                        <option value="rate">Rate</option>
                        <option value="type">Type</option>
                    </select>
                    <input type="submit" value="Change">
                </form>
            </tr>
        </table>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Rate</th>
                <th>Type</th>
                <th>Detail</th>
                <th>Operations</th>
            </tr>
        @if(isset($price))
            @foreach($price as $value)
            <tr>
                <td>{{ $value['price_id'] }}</td>
                <td>${{ $value['price_rate'] }}</td>
                <td>{{ $value['price_type'] }}</td>
                <td>{{ $value['price_detail'] }}</td>
                <td>
                    <a href="{{ route('editPrice') }}?id={{ $value['price_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <button class="btn btn-danger pull left submitDelete" source="{{ route('deletePrice') }}?id={{ $value['price_id'] }}">Delete</button>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    <!-- ======================================= PAGINATION ======================================= -->
        <ul class="pagination">
            @if($price->currentPage() == 1)
                <li class="disabled"><a href="#">&laquo;</a></li>
            @else
                <?php $index = $price->currentPage(); $index--; ?>
                <li><a href="{{ URL::route('adminDetailPrice') }}?page={{ $index }}">&laquo;</a></li>
            @endif
                @while($i <= $price->lastPage())
                    @if($price->currentPage() == $i)
                        <li class="disabled"><a href="{{ URL::route('adminDetailPrice') }}?page={{ $i }}">{{ $i }}</a></li>
                    @else
                        <li><a href="{{ URL::route('adminDetailPrice') }}?page={{ $i }}">{{ $i }}</a></li>
                    @endif
                    <?php $i++; ?>
                @endwhile
            @if($price->currentPage() == $price->lastPage())
                <li class="disabled"><a href="#">&raquo;</a></li>
            @else
                <?php $index = $price->currentPage(); $index++; ?>
                <li><a href="{{ URL::route('adminDetailPrice') }}?page={{ $index }}">&raquo;</a></li>
            @endif
        </ul>
    <!-- ========================================================================================== -->
    </div>
</div>
<div class="right-menu">
	<form action="<?php echo e(route('searchBanner')); ?>">
	    <label>Search</label>
	    <input type="text" name="q" placeholder="Enter your key...">
	    <input type="submit" value="GO">
	    <tr>
            <label>Type: </label>
            <td>
                <select name="type" style="color: black;">
                    <option value="id">ID</option>
                    <option value="title">TITLE</option>
                </select>
            </td>
        </tr>
	</form>
</div>
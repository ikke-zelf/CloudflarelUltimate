<h3>DNS Records</h3>

<table class="table">
<tr>
<th>Type</th>
<th>Name</th>
<th>Content</th>
<th>TTL</th>
<th>Action</th>
</tr>
{foreach $records as $record}
<tr>
<td>{$record.type}</td>
<td>{$record.name}</td>
<td>{$record.content}</td>
<td>{$record.ttl}</td>
<td><button class="deleteDNS" data-id="{$record.id}">Delete</button></td>
</tr>
{/foreach}
</table>

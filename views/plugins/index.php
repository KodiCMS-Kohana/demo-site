<script id="plugin-item" type="text/template">
	<td class="plugin-name" <% if (!is_installable) { %>colspan="<?php if (ACL::check('plugins.change_status')): ?>3<?php else: ?>2<?php endif; ?>"<% } %>>
		<% if (!is_installable) { %>
		<div class="alert alert-danger alert-dark padding-xs">
		<%= __('Plugin can not be installed. The required version of the CMS: :required_version. Version of your CMS is: :current_version.', {
			':required_version': required_cms_version,
			':current_version': '<?php echo CMS_VERSION; ?>'
		}) %>
		</div>
		<% } %>
		<% if (installed && settings) { %>
		<?php if (ACL::check('plugins.settings')): ?>
		<a href="<?php echo URL::backend('plugins/settings'); ?>/<%= id %>" class="btn btn-default btn-sm pull-right">
			<?php echo UI::icon('cog'); ?> <span class="hidden-xs hidden-sm"><%= __('Settings') %></span>
		</a>
		<?php endif; ?>
		<% } %>
		<h5 class="pull-left"><%= title %> <small>v<%= version %></small></h5>
		<div class="clearfix"></div>
		<% if (description) { %><p class="text-muted"><%= description %></p><% } %>
		<% if (author) { %><small class="text-light-gray text-xs"><%= __('Author') %> <%= author %></small><% } %>
	</td>
</script>

<div id="pluginsMap" class="panel">
	<table class="table table-primary table-striped table-hover" id="PluginsList">
		<colgroup>
			<col />
		</colgroup>
		<thead>
			<tr>
				<th><?php echo __('Plugin name'); ?></th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>
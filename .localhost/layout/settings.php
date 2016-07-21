<div id="settings" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="modal-title">Settings</h4>
			</div>

			<form method="post">
				<div class="modal-body">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#general" role="tab">General</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#nginx" role="tab">Nginx</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#apache" role="tab">Apache</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade in active" id="general" role="tabpanel">
							<fieldset class="form-group">
								<label for="home_url">Home URL</label>
								<input id="home_url" class="form-control" type="text" name="settings[home_url]" value="<?= $settings['home_url']; ?>">
								<small class="text-muted">e.g: http://localhost</small>
							</fieldset>

							<fieldset class="form-group">
								<label for="phpmyadmin">PhpMyAdmin</label>
								<input id="phpmyadmin" class="form-control" type="text" name="settings[phpmyadmin]" value="<?= $settings['phpmyadmin']; ?>">
								<small class="text-muted">e.g: /phpmyadmin</small>
							</fieldset>

							<fieldset class="checkbox">
								<label>
									<input type="checkbox" name="settings[show_hidden]" <?= $settings['show_hidden'] ? 'checked' : ''; ?>>
									Show hidden files
								</label>
							</fieldset>

							<fieldset class="form-group">
								<label for="ignore_files">Files to ignore</label>
								<textarea id="ignore_files" class="form-control" rows="4" name="settings[ignore_files]"><?= implode( "\n", $settings['ignore_files'] ); ?></textarea>
								<small class="text-muted">Put one file name per line</small>
							</fieldset>
						</div>

						<div class="tab-pane fade" id="nginx" role="tabpanel">
							<fieldset class="checkbox">
								<label>
									<input type="checkbox" name="settings[nginx][enabled]" <?= $settings['nginx']['enabled'] ? 'checked' : ''; ?>>
									Enable
								</label>
							</fieldset>

							<fieldset class="form-group">
								<label for="nginx_path">Path</label>
								<input id="nginx_path" class="form-control" type="text" name="settings[nginx][path]" value="<?= $settings['nginx']['path']; ?>">
							</fieldset>

							<fieldset class="form-group">
								<label for="nginx_ignore_sites">Ignore Sites</label>
								<textarea id="nginx_ignore_sites" class="form-control" rows="4" name="settings[nginx][ignore_sites]"><?= implode( "\n", $settings['nginx']['ignore_sites'] ); ?></textarea>
								<small class="text-muted">Put one file name per line</small>
							</fieldset>
						</div>

						<div class="tab-pane fade" id="apache" role="tabpanel">
							<fieldset class="checkbox">
								<label>
									<input type="checkbox" name="settings[apache][enabled]" <?= $settings['apache']['enabled'] ? 'checked' : ''; ?>>
									Enable
								</label>
							</fieldset>

							<fieldset class="form-group">
								<label for="apache_path">Path</label>
								<input id="apache_path" class="form-control" type="text" name="settings[apache][path]" value="<?= $settings['apache']['path']; ?>">
							</fieldset>

							<fieldset class="form-group">
								<label for="apache_ignore_sites">Ignore Sites</label>
								<textarea id="apache_ignore_sites" class="form-control" rows="4" name="settings[apache][ignore_sites]"><?= implode( "\n", $settings['apache']['ignore_sites'] ); ?></textarea>
								<small class="text-muted">Put one file name per line</small>
							</fieldset>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->
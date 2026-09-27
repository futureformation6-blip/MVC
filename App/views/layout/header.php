<?php
$appUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= htmlspecialchars($pageTitle ?? 'Gestion des produits', ENT_QUOTES, 'UTF-8') ?></title>
	<style>
		:root {
			--ink: #17202a;
			--muted: #68737d;
			--line: #dce3e8;
			--surface: #ffffff;
			--soft: #f3f6f8;
			--accent: #e36b3d;
			--accent-dark: #b94d27;
			--sidebar: #172b3a;
		}

		* { box-sizing: border-box; }

		body {
			margin: 0;
			min-height: 100vh;
			background: var(--soft);
			color: var(--ink);
			font-family: Georgia, 'Times New Roman', serif;
		}

		.topbar {
			align-items: center;
			background: var(--surface);
			border-bottom: 1px solid var(--line);
			display: flex;
			height: 68px;
			justify-content: space-between;
			padding: 0 28px;
		}

		.brand {
			color: var(--sidebar);
			font-size: 1.3rem;
			font-weight: 700;
			letter-spacing: .04em;
			text-decoration: none;
		}

		.topbar__caption { color: var(--muted); font-size: .9rem; }

		.app-shell { display: flex; min-height: calc(100vh - 68px); }

		.sidebar {
			background: var(--sidebar);
			flex: 0 0 238px;
			padding: 28px 18px;
		}

		.sidebar__label {
			color: #9fb0bc;
			font-family: Arial, sans-serif;
			font-size: .7rem;
			font-weight: 700;
			letter-spacing: .14em;
			margin: 0 12px 14px;
			text-transform: uppercase;
		}

		.sidebar__link {
			border-radius: 5px;
			color: #eaf0f3;
			display: block;
			font-family: Arial, sans-serif;
			margin-bottom: 6px;
			padding: 12px;
			text-decoration: none;
		}

		.sidebar__link:hover, .sidebar__link--active {
			background: var(--accent);
			color: #fff;
		}

		.content {
			flex: 1;
			min-width: 0;
			padding: 42px clamp(22px, 5vw, 72px);
		}

		.content__inner { margin: 0 auto; max-width: 920px; }

		h1 { font-size: clamp(1.8rem, 3vw, 2.6rem); margin: 0 0 28px; }

		.panel {
			background: var(--surface);
			border: 1px solid var(--line);
			border-radius: 8px;
			padding: clamp(20px, 4vw, 34px);
		}

		form { display: grid; gap: 16px; max-width: 560px; }
		label { color: var(--muted); font-family: Arial, sans-serif; font-size: .9rem; }
		input { border: 1px solid #c9d2d9; border-radius: 4px; display: block; font: inherit; margin-top: 7px; padding: 11px 12px; width: 100%; }
		input:focus { border-color: var(--accent); outline: 2px solid #f5c2ad; }
		button { background: var(--accent); border: 0; border-radius: 4px; color: #fff; cursor: pointer; font-family: Arial, sans-serif; font-weight: 700; padding: 11px 16px; }
		button:hover { background: var(--accent-dark); }
		.actions { display: flex; flex-wrap: wrap; gap: 10px; }
		.notice { border-left: 4px solid var(--accent); margin: 22px 0; padding: 10px 14px; }
		.product { border-bottom: 1px solid var(--line); padding: 13px 0; }

		@media (max-width: 680px) {
			.topbar { height: 60px; padding: 0 18px; }
			.topbar__caption { display: none; }
			.app-shell { display: block; min-height: calc(100vh - 60px); }
			.sidebar { padding: 14px; }
			.sidebar__label { display: none; }
			.sidebar__link { display: inline-block; margin: 0 4px 0 0; padding: 9px 10px; }
			.content { padding: 28px 16px; }
		}
	</style>
</head>
<body>
	<header class="topbar">
		<a class="brand" href="<?= htmlspecialchars($appUrl, ENT_QUOTES, 'UTF-8') ?>/">Atelier Produits</a>
		<span class="topbar__caption">Espace de gestion</span>
	</header>
	<div class="app-shell">
		<?php require __DIR__ . '/sidebar.php'; ?>
		<main class="content">
			<div class="content__inner">

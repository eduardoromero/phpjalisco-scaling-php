<?php
use PrettyDateTime\PrettyDateTime;

$this->layout('layout');
?>

<h2 class="ui dividing header">
    <i class="red cloud icon"></i>
    <div class="content">
        Welcome!
        <div class="sub header"><?= $this->e($IP) ?></div>
    </div>
</h2>


<div class="ui centered center aligned segment">
    <div class="ui red small statistic">
        <div class="label">
            You are being served by:
        </div>
        <div class="value">
            <?= $this->e($SERVER) ?>
        </div>
    </div>
</div>


<table class="ui celled striped table">
    <thead>
    <tr>
        <th colspan="3">
            Visitors
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($visitors as $visitor): ?>
        <tr>
            <td class="collapsing">
                <i class="red server icon"></i> <?= $this->e($visitor['server']) ?>
            </td>
            <td><i class="black user icon"></i> <?= $this->e($visitor['ip']) ?></td>
            <td class="right aligned collapsing"><?= PrettyDateTime::parse($visitor['date']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


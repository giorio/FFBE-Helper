<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="nav nav-tabs">
    <li <?= ($this->request->action === 'partyBalanced') ? 'class="active"' : ''?>>
        <?= $this->Html->link('Best in role', ['action' => 'partyBalanced']);?>
    </li>
    <li <?= ($this->request->action === 'partyStats') ? 'class="active"' : ''?>>
        <?= $this->Html->link('Best by stats', ['action' => 'partyStats']);?>
    </li>
    <li <?= ($this->request->action === 'partyRarity') ? 'class="active"' : ''?>>
        <?= $this->Html->link('Single rarity', ['action' => 'partyRarity']);?>
    </li>
    <li <?= ($this->request->action === 'partyManual') ? 'class="active"' : ''?>>
        <?= $this->Html->link('Manually', ['action' => 'partyManual']);?>
    </li>
</ul>
<?php echo $this->MyForm->create($model, array('url' => array('language' => $this->language->getLanguage(), 'plugin' => null, 'controller' => 'Bets', 'action' => 'admin_add', $event_id, $bet_type))); ?>
        <div class="input text"><label for="BetBetName">Bet Name</label><input name="data[Bet][bet_name]" value="Highest Scoring Half" disabled="disabled" type="text" id="BetBetName"></div>                                                    <table id="table_liquid" class="picksTable" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <th>Name</th>
                <th>Odd</th>
            </tr>
            <tr>
                <td>
                    <input class="input-big" type="hidden" name="data[Bet][name]" maxlength="255" id="BetPartName" value="Highest Scoring Half">
                </td>
            </tr>


            <tr>
                <td class="">
                    <input class="input-big" type="text" name="data[BetPart][0][name]" maxlength="255" id="BetPartName" value="Both Halves The Same" disabled="disabled">
                    <input class="input-big" type="hidden" name="data[BetPart][0][name]" maxlength="255" id="BetPartName" value="Both Halves The Same">
                    <input class="input-big" type="hidden" name="data[BetPart][0][line]" maxlength="255" id="BetPartName" value="Both Halves The Same">
                    <input class="input-big" type="hidden" name="data[BetPart][0][order_id]" maxlength="255" id="BetPartName" value="2">
                </td>
                <td class="">
                    <input name="data[BetPart][0][odd]" type="text" maxlength="255" id="BetPartOdd">
                </td>
            </tr>


            <tr>
                <td class="">
                    <input class="input-big" type="text" name="data[BetPart][1][name]" maxlength="255" id="BetPartName" value="First Half" disabled="disabled">
                    <input class="input-big" type="hidden" name="data[BetPart][1][name]" maxlength="255" id="BetPartName" value="First Half">
                    <input class="input-big" type="hidden" name="data[BetPart][1][line]" maxlength="255" id="BetPartName" value="First Half">
                    <input class="input-big" type="hidden" name="data[BetPart][1][order_id]" maxlength="255" id="BetPartName" value="1">
                </td>
                <td class="">
                    <input name="data[BetPart][1][odd]" type="text" maxlength="255" id="BetPartOdd">
                </td>
            </tr>


            <tr>
                <td class="">
                    <input class="input-big" type="text" name="data[BetPart][2][name]" maxlength="255" id="BetPartName" value="Second Half" disabled="disabled">
                    <input class="input-big" type="hidden" name="data[BetPart][2][name]" maxlength="255" id="BetPartName" value="Second Half">
                    <input class="input-big" type="hidden" name="data[BetPart][2][line]" maxlength="255" id="BetPartName" value="Second Half">
                    <input class="input-big" type="hidden" name="data[BetPart][2][order_id]" maxlength="255" id="BetPartName" value="3">
                </td>
                <td class="">
                    <input name="data[BetPart][2][odd]" type="text" maxlength="255" id="BetPartOdd">
                </td>
            </tr>


            </tbody></table>
        <div class="submit"><input class="btn" style="margin-top: 15px;" type="submit" value="Create"></div>
<?php echo $this->MyForm->end(); ?>
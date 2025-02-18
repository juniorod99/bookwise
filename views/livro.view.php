<?= $livro->titulo ?>
<?php require 'partials/_livro.php'; ?>

<h2>Avaliações</h2>
<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">
        <?php foreach ($avaliacoes as $avaliacao): ?>
            <div class="border border-stone-700 rounded p-2">
                <?= $avaliacao->avaliacao ?>
                <?php $nota = str_repeat("⭐", $avaliacao->nota); ?>
                <?= $nota ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div>
        <?php if (auth()): ?>
            <div class="border border-stone-700 rounded">
                <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Avaliar</h1>
                <form class="p-4 space-y-4" method="post" action="/avaliacao-criar">
                    <?php if ($validacoes = flash()->get('validacoes')): ?>
                        <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2">
                            <ul>
                                <li>Erros:</li>
                                <?php foreach ($validacoes as $validacao): ?>
                                    <li><?= $validacao ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="flex flex-col">
                        <input type="hidden" name="livro_id" value="<?= $livro->id ?>">
                        <label class="text-stone-400 mb-1" for="">Avaliação</label>
                        <textarea name="avaliacao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id=""></textarea>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-stone-400 mb-1" for="">Nota</label>
                        <select name="nota" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>

                    <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Salvar</button>

                </form>
            </div>
        <?php endif; ?>
    </div>


</div>
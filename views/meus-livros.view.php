<h1>Meus Livros</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">
    </div>

    <div>
        <div class="border border-stone-700 rounded">
            <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro!</h1>
            <form class="p-4 space-y-4" method="post" action="/livro-criar">
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
                    <label class="text-stone-400 mb-1" for="">Titulo</label>
                    <input type="text" name="titulo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1" for="">Autor</label>
                    <input type="text" name="autor" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1" for="">Descrição</label>
                    <textarea type="text" name="descricao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"></textarea>
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1" for="">Ano de Lançamento</label>
                    <select name="ano_de_lancamento" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
                        <?php foreach (range(1800, date('Y')) as $ano): ?>
                            <option value="<?= $ano ?>"><?= $ano ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Salvar</button>

            </form>
        </div>
    </div>
</div>
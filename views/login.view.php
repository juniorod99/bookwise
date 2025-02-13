<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="post">
            <?php if ($validacoes = flash()->get('validacoes_login')): ?>
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
                <label class="text-stone-400 mb-1" for="">Email</label>
                <input type="email" name="email" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1" for="">Senha</label>
                <input type="password" name="senha" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Logar</button>

        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
        <form action="/registrar" class="p-4 space-y-4" method="POST">
            <?php if ($validacoes = flash()->get('validacoes_registrar')): ?>
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
                <label class="text-stone-400 mb-1" for="">Nome</label>
                <input type="name" name="nome" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1" for="">Email</label>
                <input type="text" name="email" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1" for="">Confirme seu email</label>
                <input type="text" name="email_confirmacao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1" for="">Senha</label>
                <input type="password" name="senha" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="">
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Registrar</button>
            <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Cancelar</button>

        </form>
    </div>
</div>
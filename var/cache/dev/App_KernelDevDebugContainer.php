<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBnTUWOD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBnTUWOD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBnTUWOD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBnTUWOD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBnTUWOD\App_KernelDevDebugContainer([
    'container.build_hash' => 'BnTUWOD',
    'container.build_id' => '29fdccf4',
    'container.build_time' => 1715000152,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBnTUWOD');
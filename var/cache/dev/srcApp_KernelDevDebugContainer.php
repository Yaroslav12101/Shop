<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXFj8fwu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXFj8fwu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXFj8fwu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXFj8fwu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXFj8fwu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XFj8fwu',
    'container.build_id' => 'c32d5828',
    'container.build_time' => 1593182114,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXFj8fwu');

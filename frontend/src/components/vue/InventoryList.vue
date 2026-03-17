<template>
  <div class="mt-8 bg-white rounded-xl shadow-sm overflow-hidden">
    
    <div class="p-8 bg-slate-50/30">
      <h2 class="text-2xl font-extrabold text-slate-800 tracking-tight">Inventario de Productos</h2>
      <p class="text-slate-500 mt-1">Gestión de existencias y precios unitarios</p>
    </div>

    <div v-if="loading" class="p-10 text-center text-gray-500 italic">Cargando catálogo...</div>
    <div v-else-if="error" class="p-10 text-center text-red-500 font-medium">{{ error }}</div>

    <div v-else class="overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="bg-white">
            <th class="px-6 py-4 text-left text-xs uppercase tracking-wider text-slate-400 font-bold">ID</th>
            <th class="px-6 py-4 text-left text-xs uppercase tracking-wider text-slate-400 font-bold">Producto</th>
            <th class="px-6 py-4 text-left text-xs uppercase tracking-wider text-slate-400 font-bold">Marca</th>
            <th class="px-6 py-4 text-right text-xs uppercase tracking-wider text-slate-400 font-bold">Precio</th>
            <th class="px-6 py-4 text-center text-xs uppercase tracking-wider text-slate-400 font-bold">Stock</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 bg-white">
          <tr v-for="prod in products" :key="prod.id_producto" class="hover:bg-slate-50 transition-colors">
            <td class="px-6 py-5 text-slate-400 font-mono text-sm">#00{{ prod.id_producto }}</td>
            <td class="px-6 py-5 text-slate-700 font-semibold">{{ prod.nombre }}</td>
            <td class="px-6 py-5">
              <span class="px-2 py-1 rounded border border-gray-200 text-xs text-slate-500 bg-gray-50 uppercase">
                {{ prod.marca }}
              </span>
            </td>
            <td class="px-6 py-5 text-slate-900 font-bold">${{ prod.precio_venta }}</td>
            <td class="px-6 py-5 text-right">
              <div class="flex justify-end items-center gap-2">
                <span v-if="prod.stock <= 0" 
                      class="bg-red-50 text-red-600 border border-red-100 px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-tighter">
                  Sin Stock
                </span>
                <span v-else-if="prod.stock <= 5" 
                      class="bg-orange-50 text-orange-600 border border-orange-100 px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-tighter">
                  Por Agotarse
                </span>
                <span v-else 
                      class="bg-emerald-50 text-emerald-600 border border-emerald-100 px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-tighter">
                  Disponible
                </span>
                <span class="text-slate-400 font-mono text-xs">({{ prod.stock }})</span>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import { apiFetch } from '../../utils/api';

const products = ref([]);
const loading = ref(false);
const error = ref(null);

const load = async () => {
  loading.value = true;
  error.value = null;
  try {
    const res = await apiFetch('/productos');
    if (!res.ok) {
      error.value = 'Error al conectar con la base de datos';
      return;
    }
    // Asegúrate de que los campos coincidan con tu tabla: id_producto, nombre, marca, precio_venta, stock
    products.value = await res.json();
  } catch (err) {
    error.value = 'El servidor no responde';
  } finally {
    loading.value = false;
  }
};

onMounted(load);
</script>
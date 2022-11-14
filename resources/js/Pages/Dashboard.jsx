import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm, Head } from "@inertiajs/inertia-react";
import { Link } from "@inertiajs/inertia-react";

export default function Dashboard(props) {
    const { data, setData, post, processing, reset, errors } = useForm({
        processor: "",
        videoGraphicsCard: "",
        motherboard: "",
        memory: "",
        storage: "",
        powerSupply: "",
    });

    const submit = (e) => {
        e.preventDefault();
        console.log(data);
        // post(route("barang.store"), { onSuccess: () => reset() });
    };

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-12">
                <div className="p-6 bg-white border-b border-gray-200">
                    <h1 className="text-2xl font-bold mb-4">
                        Simulasi Rakit PC
                    </h1>
                    <form onSubmit={submit}>
                        <InputError message={errors.message} className="mt-2" />
                        <div className="grid gap-6 mb-6">
                            <div>
                                <label
                                    htmlFor="input_processor"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    Processor
                                </label>
                                <select
                                    id="input_processor"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData("processor", e.target.value)
                                    }
                                    value={data.processor}
                                >
                                    <option value=""></option>
                                    {props.listProcessor.map((processor) => {
                                        return (
                                            <option
                                                value={processor.id}
                                                key={processor.id}
                                            >
                                                {`${processor.name} - ${processor.core_clock}`}
                                            </option>
                                        );
                                    })}
                                </select>
                            </div>
                            <div>
                                <label
                                    htmlFor="input_vga"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    Video Graphics Card
                                </label>
                                <select
                                    id="input_vga"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData(
                                            "videoGraphicsCard",
                                            e.target.value
                                        )
                                    }
                                    value={data.videoGraphicsCard}
                                >
                                    <option value=""></option>
                                    {props.listVga.map((vga) => {
                                        return (
                                            <option value={vga.id} key={vga.id}>
                                                {`${vga.name} - ${vga.core_clock}`}
                                            </option>
                                        );
                                    })}
                                </select>
                            </div>
                            <div>
                                <label
                                    htmlFor="input_motherboard"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    Motherboard
                                </label>
                                <select
                                    id="input_motherboard"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData("motherboard", e.target.value)
                                    }
                                    value={data.motherboard}
                                >
                                    <option value=""></option>
                                    {props.listMotherboard.map(
                                        (motherboard) => {
                                            return (
                                                <option
                                                    value={motherboard.id}
                                                    key={motherboard.id}
                                                >
                                                    {`${motherboard.name} - ${motherboard.socket}`}
                                                </option>
                                            );
                                        }
                                    )}
                                </select>
                            </div>
                            <div>
                                <label
                                    htmlFor="input_ram"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    RAM
                                </label>
                                <select
                                    id="input_ram"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData("memory", e.target.value)
                                    }
                                    value={data.memory}
                                >
                                    <option value=""></option>
                                    {props.listRam.map((ram) => {
                                        return (
                                            <option value={ram.id} key={ram.id}>
                                                {`${ram.name} - ${ram.speed} - ${ram.modules}`}
                                            </option>
                                        );
                                    })}
                                </select>
                            </div>

                            <div>
                                <label
                                    htmlFor="input_storage"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    Storage
                                </label>
                                <select
                                    id="input_storage"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData("storage", e.target.value)
                                    }
                                    value={data.storage}
                                >
                                    <option value=""></option>
                                    {props.listStorage.map((storage) => {
                                        return (
                                            <option
                                                value={storage.id}
                                                key={storage.id}
                                            >
                                                {`${storage.name} - ${storage.capacity} - ${storage.interface}`}
                                            </option>
                                        );
                                    })}
                                </select>
                            </div>
                            <div>
                                <label
                                    htmlFor="input_psu"
                                    className="block mb-2 text-sm font-medium"
                                >
                                    Power Supply
                                </label>
                                <select
                                    id="input_psu"
                                    className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onChange={(e) =>
                                        setData("powerSupply", e.target.value)
                                    }
                                    value={data.powerSupply}
                                >
                                    <option value=""></option>
                                    {props.listPowerSupply.map(
                                        (powerSupply) => {
                                            return (
                                                <option
                                                    value={powerSupply.id}
                                                    key={powerSupply.id}
                                                >
                                                    {`${powerSupply.name} - ${powerSupply.efficiency_rating} - ${powerSupply.wattage}`}
                                                </option>
                                            );
                                        }
                                    )}
                                </select>
                            </div>
                        </div>

                        <PrimaryButton className="mt-4" disabled={processing}>
                            Input
                        </PrimaryButton>
                    </form>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

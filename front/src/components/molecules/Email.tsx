const Email = () => {
  return (
    <div className="mb-5">
      <input type="email" id="email" className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Emailアドレスを入力してください" required />
    </div>
  );
};

export default Email;
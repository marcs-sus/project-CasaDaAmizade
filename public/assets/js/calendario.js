document.addEventListener("DOMContentLoaded", function () {
  const cellsContainer = document.querySelector(".cells");
  const currentMonthElement = document.getElementById("currentMonth");
  const prevMonthButton = document.getElementById("prevMonth");
  const nextMonthButton = document.getElementById("nextMonth");

  let currentDate = new Date();

  // Atualiza o calendário
  function updateCalendar() {
    const monthName = currentDate.toLocaleString("pt-BR", { month: "long" });
    const year = currentDate.getFullYear();
    currentMonthElement.textContent = `${monthName} ${year}`;

    generateCalendar();
  }

  // Gera as células do calendário
  function generateCalendar() {
    cellsContainer.innerHTML = ""; // Limpa as células
    const firstDay = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth(),
      1
    );
    const lastDay = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth() + 1,
      0
    );
    const daysInMonth = lastDay.getDate();
    const startDay = firstDay.getDay();

    // Preenche dias em branco antes do início do mês
    for (let i = 0; i < startDay; i++) {
      const emptyCell = document.createElement("div");
      emptyCell.classList.add("cell", "empty");
      cellsContainer.appendChild(emptyCell);
    }

    // Preenche os dias do mês
    for (let day = 1; day <= daysInMonth; day++) {
      const cell = document.createElement("div");
      cell.classList.add("cell");
      cell.textContent = day;
      cellsContainer.appendChild(cell);
    }
  }

  // Navegação de mês
  prevMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
  });

  nextMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
  });

  updateCalendar();
});
